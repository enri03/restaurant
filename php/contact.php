<?php 


if(isset($_POST['submit'])){
require 'database.php';
$emri=$_POST['contact_names'];
$email=$_POST['contact_email'];
$cel=$_POST['contact_phone'];
$msg=$_POST['contact_message'];


$query="INSERT INTO sms VALUES('','$emri','$email','$cel','$msg');";
$query_run=mysqli_query($conn,$query);
header('Location: ../contact.html');


}