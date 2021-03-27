<?php
session_start();


?>
<
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
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Nderfaqa e Adminit</a>
              <div class="bottom-border pb-3">
                <img src="images/admini.png" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white"><?php echo 'Admin:'.$_SESSION['emri'] ?></a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="index.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-address-book text-light fa-lg mr-3"></i>Rezervimet</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-utensils text-light fa-lg mr-3"></i>Menut</a></li>
                <li class="nav-item"><a href="shto_oferta.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-plus text-light fa-lg mr-3"></i>Shto Menu</a></li>
                <li class="nav-item"><a href="porosi.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-archive text-light fa-lg mr-3"></i>Porosit</a></li>
              
                <li class="nav-item"><a href="posta.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-comment text-light fa-lg mr-3"></i>Posta</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Kerko ketu...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-comments text-muted fa-lg"></i></a></li>
                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fas fa-bell text-muted fa-lg"></i></a></li>
                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Deshironi te largoheni?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Klikoni mbi butonin Logout per tu larguar.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Qendro</button>
          <a href="../php/includes/logout-inc.php"> <button type="button" class="btn btn-danger" >Logout</button></a>
          
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal -->
 

    <!-- table-->
<?php require '../php/database.php';

?>

    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
             
 
              <h3 class="text-muted text-center mb-3">Menu ditore</h3>
 
   

 <table class="table table-striped bg-light text-center">
 <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Monday'") or die($conn->error); ?>
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Hene</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>Foto</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>

                <!--Menuja e dites se marte -->
                <table class="table table-striped bg-light text-center">
                <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Tuesday'") or die($conn->error); ?><!-- Query per diten e marte -->
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Marte</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>
                
                <!--Menuja e dites se merrkure -->
                <table class="table table-striped bg-light text-center">
                <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Wednesday'") or die($conn->error); ?><!-- Query per diten e merrkure -->
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Merrkure</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>
                  <!--Menuja e dites se enjte -->
                  <table class="table table-striped bg-light text-center">
                <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Thursday'") or die($conn->error); ?><!-- Query per diten e enjte -->
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Enjte</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>
                  <!--Menuja e dites se premte -->
                  <table class="table table-striped bg-light text-center">
                <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Friday'") or die($conn->error); ?><!-- Query per diten e premte -->
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Premte</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>

  <!--Menuja e dites se shtune -->
  <table class="table table-striped bg-light text-center">
                <?php  $result=  $conn->query("SELECT * FROM menu WHERE  dita='Saturday'") or die($conn->error); ?><!-- Query per diten e shtune -->
    <!-- blloku mesazhit  --> 

    <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?>">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
<!-- mbyllja e bllokut te mesazhit  -->
 <h3 class="text-muted text-center mb-3">Menuja e Dites se Shtune</h3>
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Produkti</th>
                      <th>Kategoria</th>
                      <th>Dita</th>
                      <th>Pershkrimi</th>
                     
                      <th>Cmimi</th>
                      <th colspan="2">Veprime</th>
                   
                    </tr>
                  </thead>
          
                  <?php
while($row=$result->fetch_assoc()):?><!--data fetch-->
                  <tbody>
                    <td><?php echo '<img src="images/'.$row['img'].'" width="50" heigh="50">'?> </td>
                    <td><?php echo $row['produkti'] ?> </td>
                    <td><?php echo $row['kategoria'] ?> </td>
                    <td><?php echo $row['dita'] ?> </td>
                    <td><?php echo $row['pershkrimi'] ?> </td>
                    <td><?php echo $row['cmimi'] ?> </td>
                    <td> <a  href="shto_oferta.php?edit=<?php echo $row['id'] ?>" class="btn btn-info"  >Ndrysho </a> 
                    <a  class="btn btn-danger" href="veprime_menu.php?delete=<?php echo $row['id'] ?>">Fshij </a> 
                    </td>
                    
                  
                 
    </tbody>
     
<?php endwhile ?>
                </table>



               
              </div>
            </div>
          </div>
        </div>
      </div>
     

    </section>
   
    <!--end of the table-->
  
    
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
