<?php
session_start();
$produkti='';
$kategoria='';
$lloji='';
$dita='';
$pershkrimi='';
$cmimi='';
$updata=false;
$id=0;

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


// funksioni i butonit fshij ne tabelen e rezervimeve
if(isset($_GET['delete'])){
$_SESSION['mesazhi']="Fshirja e te dhenave u krye me sukses!!!";
$_SESSION['type']="danger";
    $id=$_GET['delete'];// ruajme id e elementit te klikur per tu fshire nga admini
    $conn->query("DELETE FROM menu WHERE id=$id") or ($conn->error);
    header('Location: menuDite.php?sukses');

}
//funksjoni edit
if(isset($_GET['edit'])){
$updata=true;
    $id=$_GET['edit'];
    $result=$conn->query("SELECT * FROM menu WHERE id=$id") or die($conn->error);
    if($result){
        $row=$result->fetch_array();
        $produkti=$row['produkti'];
        $kategoria=$row['kategoria'];
       
        $dita=$row['dita'];
        $pershkrimi=$row['pershkrimi'];
        $cmimi=$row['cmimi'];
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
$lloji=$_POST['lloji'];
$query="INSERT INTO menu VALUES('','$prd','$kat','$dita','$prsh','$price','$img','$lloji');";
$query_run=mysqli_query($conn,$query);



if($query_run){
move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$_FILES["img"]["name"]);
    $_SESSION['mesazhi']="Shtimi i menus u krye me sukses!!!";
$_SESSION['type']="success";
header('Location: shto_oferta.php?sukses');


}




}


//funksjoni updata
if(isset($_POST['updata'])){
$id=$_POST['id'];
$result=$conn->query("SELECT * FROM menu WHERE id=$id;");
$row=$result->fetch_assoc();
$img1=$row['img'];
$prd=$_POST['produkti'];
$kat=$_POST['kategoria'];
$dita=$_POST['dita'];
$price=$_POST['cmimi'];
$prsh=$_POST['pershkrimi'];
$lloji=$_POST['lloji'];
$img=$_FILES["img"]['name'];
if(empty($img)){
$query="UPDATE menu SET produkti='$prd', kategoria='$kat', dita='$dita', pershkrimi='$prsh', cmimi='$price', img='$img1',lloji='$lloji' WHERE id=$id;";}
else{
    $query="UPDATE menu SET produkti='$prd', kategoria='$kat', dita='$dita', pershkrimi='$prsh', cmimi='$price', img='$img',lloji='$lloji' WHERE id=$id;"; 
}

$query_run=mysqli_query($conn,$query);
$_SESSION['mesazhi']="Menuja u ndryshua!!!";
$_SESSION['type']="warning";
header('Location: shto_oferta.php?sukses');
}