<?php
session_start();
$produkti='';
$kategoria='';
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
$produkti="";

// funksioni i butonit fshij ne tabelen e rezervimeve
if(isset($_GET['delete'])){
$_SESSION['mesazhi']="Fshirja e te dhenave u krye me sukses!!!";
$_SESSION['type']="danger";
    $id=$_GET['delete'];// ruajme id e elementit te klikur per tu fshire nga admini
    $conn->query("DELETE FROM rezervimet WHERE id=$id") or ($conn->error);
    header('Location: index.php?sukses');

}
if(isset($_GET['delete1'])){
    $_SESSION['mesazhi']="Fshirja e te dhenave u krye me sukses!!!";
    $_SESSION['type']="danger";
        $id=$_GET['delete1'];// ruajme id e elementit te klikur per tu fshire nga admini
        $conn->query("DELETE FROM sms WHERE id=$id") or ($conn->error);
        header('Location: posta.php?sukses');
    
    }
//funksjoni edit
if(isset($_GET['edit'])){

    $id=$_GET['edit'];
    $result=$con->query("SELECT * FROM menu WHERE id=$id") or die($conn->error);
    if(count($result)){
        $row=$result->fetch_array();
        $produkti=$row['produkti'];
    }

}


//funksjoi save 
if(isset($_POST['save'])){
$prd=$_POST['produkti'];
$kat=$_POST['kategoria'];
$dita=$_POST['dita'];
$price=$_POST['cmimi'];
$prsh=$_POST['pershkrimi'];
$img=$_FILES["img"]['name'];
$query="INSERT INTO menu VALUES('','$prd','$kat','$dita','$prsh','$price','$img');";
$query_run=mysqli_query($conn,$query);



if($query_run){
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"]);
    $_SESSION['mesazhi']="Shtimi i menus u krye me sukses!!!";
$_SESSION['type']="success";
header('Location: shto_oferta.php?sukses');


}




}