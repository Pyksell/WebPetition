<?php
session_start();

include('functions.php');

$petitionID = $_GET['petition'];
//$user = userinfo($_SESSION)

add_signature($petitionID, $_SESSION['ID']);

header("location: menu_petitions.php");

?>
