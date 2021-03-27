<?php
if(isset($_POST['submit'])){
    require "database.php";
$emri=$_POST['register_names'];
$email=$_POST['register_email'];
$nr_cel=$_POST['register_phone'];
$dita=$_POST['register_date'];
$kohezgjatja=$_POST['register_time'];
$nr_personave=$_POST['register_ticket'];
if(empty($emri)|| empty($email)|| empty($nr_cel)|| empty($dita)|| empty($kohezgjatja)|| empty($nr_personave)){
    echo "ERROR 404";
}



$sql="SELECT emri FROM rezervimet WHERE emri=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header('Location: ../reservations.php?error=slerror');
}
else{
    mysqli_stmt_bind_param($stmt,'s',$emri);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $rowcount=mysqli_stmt_num_rows($stmt);
}
if($rowcount>0){
    header('Location: ../reservations.php?error:perdorusiekziston');
}
else{
    $sql="INSERT INTO rezervimet(emri,email,nrcel,dita,kohezgjatja,nr_personave) VALUES(?,?,?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../reservations.php?error=errorinputdatabaze');
    }
    else{
     
        mysqli_stmt_bind_param($stmt,'ssssss',$emri,$email,$nr_cel,$dita,$kohezgjatja,$nr_personave);
    mysqli_stmt_execute($stmt);
    header('Location: ../reservations.php?sukses=rregjistrimi_i_suksesshem');
   

    }
    mysqli_stmt_close($stmt);
mysqli_close($conn);

}
}
?>