<?php
function getskills($query,$connection){
    $query="SELECT * FROM Skill";
    $data1 = array();
    $select= mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select)){
        $data1[]=$row;
    }
    return $data1;
}
function getskilltools($query,$connection){
    $query='SELECT * FROM skill_tools';
    $data2 = array();
    $select = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($select)){
        $data2[] = $row;
    }
    return $data2;
}

