<?php
function getEducation($connection){
    $query='SELECT * FROM education';
    $data=array();
    $select= mysqli_query($connection,$query);
    while ($row=mysqli_fetch_assoc($select)){
        $data[]=$row;
    }
    return $data;
}
