<?php
$db=mysqli_connect("localhost","root","","cibo") or die(mysqli_error($db));

if (isset($_POST['submit'])){
$emer = $_POST['emerU'];
$nrcel = $_POST['nrU'];
$nr_prod = $_POST['nr_prod'];

 
$totali = $_POST['totali'];
$sql = "insert into porosit(emri,nrcel,nr_prod,totali,uploadedon) VALUES ('".$emer."', '".$nrcel."', '".$nr_prod."', '".$totali."', NOW())";
 if (mysqli_query($db, $sql)) {
          //echo "New record created successfully";
      } else {
        //   var_dump("Error: " . $sql . "<br>" . mysqli_error($db));
      }
      $id=mysqli_insert_id($db);
      $emri_prod = $_POST['emerP'];
      $cmimi = $_POST['cmimiP'];
     $sasia=$_POST['sasia'];
      foreach ($emri_prod as $key => $n ) {
        $sqlfile = "insert into produktet(id_prod, emri_prod, cmimi,sasia) VALUES ('".$id."','".$n."','".$cmimi[$key]."','".$sasia[$key]."')";


if (mysqli_query($db, $sqlfile)) {
          //echo "New record created successfully";
      } else {
          //var_dump("Error: " . $sql . "<br>" . mysqli_error($db));
      }
     
    }

mysqli_close($db);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <title>Redirect Page</title>
  </head>
  <body>
    <div class="container text-center my-5"> <h5>Falemnderit per besimin! Do t'iu pergjigjemi brenda 30 minutave per detajet e porosise. Ju falemnderit!</h5>
  <br>
<a href="./card.php">Kthehu pas</a></div>
</body>