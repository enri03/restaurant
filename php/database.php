<?php 
// parametrat per tu lidhur me databazen
$dbhost="localhost";
$dbUser="root";
$dbPass="";
$dbName="cibo";
// lidhja me databazen
$conn=mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Lidhja deshtoj");
}

