<?php include_once("../model/connection.php");
include_once('../controllers/getGeneralInfo.php');
$General_Info = getGeneralInfo($conn);

$name=$General_Info['name'];
$familyname=$General_Info['familyname'];
$address=$General_Info['address'];
$tel=$General_Info['telephone'];
$email=$General_Info['email'];
$about=$General_Info['about'];
$fbid=$General_Info['facebookid'];
$github=$General_Info['github'];
$linkdn=$General_Info['linkedin'];
$twttr=$General_Info['twitter'];
$intrest=$General_Info['intrest'];
