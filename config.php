<?php 
session_start();
$host='localhost';
$db='project';
$user='root';
$password='';

try{
    $con=new PDO("mysql:host=$host; dbname=$db",$user,$password);
    echo "Connected";
}
catch(Exception $e){
    echo "Something went wrong! (:";
}

?>