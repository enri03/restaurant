<?php
include_once 'php/includes/header.php';

    if(isset($_SESSION['email'])){
        header('Location: admin_dashboard/index.php');
        
    }
 
    
    ?>
<div class="container">
   
 
<!-- Default form register -->
<form class="text-center border border-light p-5" action="php/includes/login-inc.php" method='post'>

    <p class="h4 mb-4">Log in</p>

    <div class="form-row mb-4">
 

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Fjalekalimi" name="psw" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
  

    

    <!-- Sign ip button -->
    <button class="btn btn-info my-4 btn-block" name="submit" type="submit">Log in</button>

    
</form>
<!-- Default form register -->


</div>

<?php
include_once 'php/includes/footer.php';


?>







