<?php 
session_start();
if(isset($_POST['add'])){
//print_r($_POST['product_id']);
if(isset($_SESSION['card'])){
    
    $item_array_id = array_column($_SESSION['card'], "product_id");
  
    //kontrolli nese produkti i klikuar eshte klikuar me pare 
    if(in_array($_POST['product_id'], $item_array_id)){
        echo "<script>alert('Produkti i zhgjedhur ndodhet tashme ne shporte..!')</script>";
        echo "<script>window.location = 'menu.php'</script>";
       
    }// nese nuk eshte ne sesion i shtojme ne vektor 
    else{
       $count=count($_SESSION['card']);
       $item_array=array(
        "product_id"=>$_POST['product_id']
    );
    $_SESSION['card'][$count]=$item_array;
    print_r($_SESSION['card']);
     }
     header("Location: ../menu.php");
     exit();
}
// vendosja e sesionit per here te pare
else{

    $item_array=array(
        "product_id"=>$_POST['product_id']
    );
    // krijojm nje sesion te ri
    $_SESSION['card'][0]=$item_array;//ne indeksin 0 te sesiont ruajme vektorin me te dhenat e produktit te klikuar
    header("Location: ../menu.php");
    exit();
}

}




?>
