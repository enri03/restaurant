<?php 
session_start();
include_once '../php/database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
     
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        
        <div class="wrapper wrapper--w780">
                             <!-- blloku mesazhit  --> 

                             <?php
if(isset($_SESSION['mesazhi'])):?>
<div class="alert alert-<?=$_SESSION['type']?> card" style="background-color:#2AC735; height:40px;text-align:center;">  
<?php echo $_SESSION['mesazhi'];
      unset($_SESSION['mesazhi']);
?>
</div>
<?php endif ?>
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                   
                    <h2 class="title">Rregjistrohu</h2>
    
                    <form method="POST" action="registerU-inc.php">
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3 js-datepicker" type="text" placeholder="Datelindja" name="birthday" required>
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" required> 
                                    <option disabled="disabled" selected="selected">Gjinia</option>
                                    <option value='male'>Mashkull</option>
                                    <option value='female'> Femer</option>
                                    
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Fjalekalimi" name="pass" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Konfirmo Fjalekalimin" name="configpass" required>
                        </div>
                        <div class="p-t-10">
                            <button class="btn  btn--pill btn--green" type="submit" name="register">Rregjistrohu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
