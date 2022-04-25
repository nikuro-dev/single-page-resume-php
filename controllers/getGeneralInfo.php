<?php
include_once('../model/connection.php');
function getGeneralInfo($connection){
   $query='SELECT * FROM `general_info` LIMIT 1';
   $select = mysqli_query($connection,$query);
   $data = mysqli_fetch_array($select);
   return $data;
}



?>
