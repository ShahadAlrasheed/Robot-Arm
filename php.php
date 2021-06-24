<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword ="";
$dbname = "armrobot";


$conn = new mysqli($host , $dbUsername , $dbPassword , $dbname );

if (mysqli_connect_error()){
    die(); }
    else if(isset($_POST['حفظ'])){
$g = $_POST['g'];  
$g1 = $_POST['g1']; 
$g2 = $_POST['g2']; 
$g3 = $_POST['g3']; 
$g4 = $_POST['g4']; 
$g5 = $_POST['g5']; 


$sql = "INSERT into engine (engine1, engine2, engine3, engine4, engine5, engine6) values('$g','$g1','$g2', '$g3', '$g4', '$g5')");
if ($conn->query($sql)){
    echo "done"
} else {
    die();
} }
else if (isset($_POST ['تشغيل'])){
    $sql = "SELECT * FROM engine " ;
    if ($conn->query($sql)){
        echo "successfuly added";
    }else{
        die();
    }
    mysql_close($conn);
}

