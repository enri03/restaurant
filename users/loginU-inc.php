<?php
session_start();
if(isset($_POST['login'])){

    include_once '../php/database.php';
    $email=$_POST['email'];
    $pass=$_POST['psw'];
 // kontrolli per fusha boshe

if (empty($email)||empty($pass)){
    header("Location: login.php?error=fushboshe");
exit();
}
else{
    $result=$conn->query("SELECT * FROM users WHERE email='$email';") or die($conn->error);
    if($result){
      $row=$result->fetch_assoc();
    $hash=$row['pass'];
    $check=password_verify($pass,$hash);
      if($check==true){
$_SESSION['email']=$row['email'];
header("Location: ../menu.php?sukses");
exit();
      }  
      else{
        header("Location: login.php?error=pasword_error");
        exit();
      }
    }
    else{
        header("Location: login.php?error=nouserwiththisemail");
        exit();
    }
}

}














?>