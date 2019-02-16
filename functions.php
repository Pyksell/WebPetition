<?php
include("config.php");



// Retourne true si l'utilisateur s'est bien identifié
function userconnexion($mail,$mdp){
     $bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
     $user=userinfo($mail);
     mysqli_close($bdd);
     if(strcmp($user['password'],$mdp)==0){
       $connexion = TRUE;
     }
     else {
       $connexion = FALSE;
     }
     //$connexion = strcmp($user['password'],$mdp);
    return ($connexion);
    }



// Récupération des infos de user comme tableau
function userinfo($mail){
    $bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

    $req_user = mysqli_prepare($bdd, "SELECT * FROM user WHERE mailAddress = ?;");
    mysqli_stmt_bind_param($req_user, 's', $mail); //'s' signifie que le paramètre est une chaine de caractères
    mysqli_stmt_execute($req_user);
    $res_user = mysqli_stmt_get_result($req_user);
    $user = mysqli_fetch_assoc($res_user);

    mysqli_free_result($res_user);
    mysqli_close($bdd);

    return $user;
}



// Récupération des infos de petition comme tableau
function petitioninfo($petitionID){
    if($bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName'])){
      $req_petition = mysqli_prepare($bdd, "SELECT * FROM petition WHERE ID = ?");
      mysqli_stmt_bind_param($req_petition, 'i', $petitionID); //'i' signifie que le paramètre est un entier
      mysqli_stmt_execute($req_petition);
      $res_petition = mysqli_stmt_get_result($req_petition);
      $user = mysqli_fetch_assoc($res_petition);

      mysqli_free_result($res_petition);
      mysqli_close($bdd);
    }
    else {
      $user = 0;
    }


    return $user;
}



// Retourne le nombre de signature sur une pétition
function nbsignature($petitionID){
     if($bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName'])){
      $req_petition = mysqli_prepare($bdd, "SELECT nbOfSignature FROM petition WHERE ID = ?");
      mysqli_stmt_bind_param($req_petition, 'i', $petitionID); //'i' signifie que le paramètre est un entier
      mysqli_stmt_execute($req_petition);
      $res_petition = mysqli_stmt_get_result($req_petition);
      $user = mysqli_fetch_assoc($res_petition);

      mysqli_free_result($res_petition);
      mysqli_close($bdd);
    }
    else {
      $user = 0;
    }


    return $user;
}


// Ajout d'un user dans la base
function adduser( $firstName, $lastName, $alias, $mailAddress, $mdp){
$bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
$req=mysqli_prepare($bdd,"INSERT INTO `tbuffagni`.`user`(`firstName`, `lastName`, `alias`, `mailAddress`, `password`) VALUES (?,?,?,?,?);");
mysqli_stmt_bind_param($req,'sssss' ,$firstName, $lastName, $alias, $mailAddress, $mdp);
mysqli_stmt_execute($req);
mysqli_close($bdd);
}



// Ajout d'une petition dans la base
function addpetition($title, $category, $creatorID, $dateOfCreation, $hopesign,  $description){
$bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
$r=mysqli_prepare($bdd,"INSERT INTO `tbuffagni`.`petition`(`title`, `category`, `creatorID`, `dateOfCreation`, `hopesign`, `description`) VALUES (?,?,?,?,?,?);");
mysqli_stmt_bind_param($r,'ssiiis' ,$title, $category, $creatorID, $dateOfCreation, $hopesign, $description);
mysqli_stmt_execute($r);
mysqli_close($bdd);
}


//Retourne un tableau avec les ID de toutes les pétitions
function ID_petitions(){
  $bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req = mysqli_query($bdd,'SELECT ID FROM petition ORDER BY nbOfSignature DESC;');
  //$resultat = mysqli_fetch_assoc($req);
  $resultat = array();
  $indice = 0;
  while($tab = mysqli_fetch_assoc($req)){
    $resultat[$indice] = $tab['ID'];
    $indice = $indice + 1;
  }
  mysqli_close($bdd);
  return $resultat;
}



//Retourne un tableau avec les ID de toutes les pétitions signées
function ID_signed_petitions($userID){
  $bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req = mysqli_query($bdd,'SELECT petitionID FROM signature WHERE userID = ' . $userID . ';');
  //$resultat = mysqli_fetch_assoc($req);
  $resultat = array();
  $indice = 0;
  while($tab = mysqli_fetch_assoc($req)){
    $resultat[$indice] = $tab['petitionID'];
    $indice = $indice + 1;
  }
  mysqli_close($bdd);
  return $resultat;
}




//Retourne un tableau avec les ID de toutes les pétitions créées
function ID_created_petitions($userID){
  $bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req = mysqli_query($bdd,'SELECT ID FROM petition WHERE creatorID = ' . $userID . ';');
  //$resultat = mysqli_fetch_assoc($req);
  $resultat = array();
  $indice = 0;
  while($tab = mysqli_fetch_assoc($req)){
    $resultat[$indice] = $tab['ID'];
    $indice = $indice + 1;
  }
  mysqli_close($bdd);
  return $resultat;
}



// Ajoute une signature a une pétition
function add_signature($petitionID, $userID){
	$bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
	$query_nb = "UPDATE `tbuffagni`.`petition` SET `nbOfSignature`= ? WHERE `ID` = ?";
	$query_signature = "INSERT INTO `tbuffagni`.`signature`(`petitionID`,`userID`) VALUES (?,?)";

  $nb = nbsignature($petitionID);
  $nb['nbOfSignature'] = $nb['nbOfSignature'] + 1;

  $req_nb = mysqli_prepare($bdd,$query_nb);
  $req_signature = mysqli_prepare($bdd,$query_signature);

  mysqli_stmt_bind_param($req_nb, 'ii', $nb['nbOfSignature'], $petitionID);
  mysqli_stmt_bind_param($req_signature, 'ii', $petitionID, $userID);

  mysqli_stmt_execute($req_nb);
  mysqli_stmt_execute($req_signature);
  mysqli_close($bdd);
}



function petitionCreator($creatorID){
  $bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);

  $requete = mysqli_prepare($bdd, "SELECT firstName, lastName FROM user WHERE ID = ?");
  mysqli_stmt_bind_param($requete, 'i', $creatorID);
  mysqli_stmt_execute($requete);
  $resultat = mysqli_stmt_get_result($requete);
  $createur = mysqli_fetch_assoc($resultat);

  mysqli_free_result($resultat);
  mysqli_close($bdd);

  return $createur;
}


function id_petition_category($category){
  $bdd = mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req = mysqli_query($bdd,"SELECT ID FROM petition WHERE category = '$category';");
  //$resultat = mysqli_fetch_assoc($req);
  $resultat = array();
  $indice = 0;
  while($tab = mysqli_fetch_assoc($req)){
    $resultat[$indice] = $tab['ID'];
    $indice = $indice + 1;
  }
  mysqli_close($bdd);
  return $resultat;
}



// Met à jour les infos d'un utilisateur dans la bdd
function updateuser($ID, $firstName, $lastName, $alias){
$bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
$req=mysqli_prepare($bdd,"UPDATE user SET firstName = ?, lastName = ?, alias = ? WHERE ID = ?;");
mysqli_stmt_bind_param($req,'sssi' ,$firstName, $lastName, $alias, $ID);
mysqli_stmt_execute($req);
mysqli_close($bdd);
}


function updatepassword($userID, $password){
  $bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req=mysqli_prepare($bdd,"UPDATE user SET password = ? WHERE ID = ?;");
  mysqli_stmt_bind_param($req,'si' ,$password, $userID);
  mysqli_stmt_execute($req);
  mysqli_close($bdd);
}







// Supression d'un user de la base (inutilisée)
function deleteuser($mail){
  $bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req =mysqli_prepare($c,"DELETE FROM user WHERE mail=?");
  mysqli_stmt_bind_param($req,'s',$mail);
  mysqli_stmt_execute($req);
  mysqli_close($bdd);
}



// Supression d'une petition de la base
function deletepetition($petitionID){
  $bdd=mysqli_connect($GLOBALS['dbServ'], $GLOBALS['dbUser'], $GLOBALS['dbPass'], $GLOBALS['dbName']);
  $req=mysqli_prepare($c,"DELETE FROM petition WHERE petitionID =?");
  mysqli_stmt_bind_param($req,'s',$petitionID);
  mysqli_stmt_execute($req);
  mysqli_close($bdd);
}

?>
