<?php
include_once('../model/connection.php');
function getExperiences ($connection){
    $query='SELECT * FROM experiences ';
    $data=array();
    $select=mysqli_query($connection,$query);
    while ($row=mysqli_fetch_assoc($select)){
        $data[] = $row;
    }
    return $data;
}
