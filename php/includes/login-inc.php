<?php 
if(isset($_POST['submit'])){
    require '../database.php';

    $email=$_POST['email'];
    $psw=$_POST['psw'];
    if(empty($email)||empty($psw)) {
        header('Location: ../../admin.php?lfusha_boshe');
        exit();
    }
    else{
        $sql='SELECT * FROM admini WHERE email=?';
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('Location: ../../admin.php?sqlerror');
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pswHash=password_hash($row['fjalekalimi'],PASSWORD_DEFAULT);
$pswCheck=password_verify($psw,$pswHash);// kontrollojme nqs pass i futur nga admini perputhem me pass e databazes
if($pswCheck==false){
    header('Location: ../../admin.php?lpasword_i_gabuar');
   
    exit();
}
else if($pswCheck==true){
    session_start();
    $_SESSION['emri']=$row['emri'];
    $_SESSION['email']=$row['email'];
    $_SESSION['fjalekalimi']=$row['fjalekalimi'];
    header('Location: ../../admin.php?sukses');
    exit();

}
else{
    header('Location: ../../admin.php?error404');
    exit();
}


            }
            else{
                header('Location: ../../admin.php?nouser');
                exit();
            }
        }
    }
  
}  