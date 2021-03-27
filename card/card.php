<?php
session_start();
if(isset($_GET['action'])){
    foreach($_SESSION['card'] as $key=>$value){
        if($value['product_id']==$_GET['id']){
            unset($_SESSION['card'][$key]);
        }
    }
   
}




?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    
</head>

<body>
  <?php include_once 'header.php';
  include_once '../php/database.php';
  $result=$conn->query("SELECT * FROM menu;");
  ?>  
    
<div class="container-fluid">
<div class="row px-5">
     <div class="col md-7">
        <div class="shopping-cart">
            <h6>Shporta Ime</h6>
                     <hr>
            <?php $total=0; ?>
            <?php if(isset($_SESSION['card'])): ?>
            <?php $product_id=array_column($_SESSION['card'],"product_id");  
         
            ?>
            <?php $arrprice = array();
             $arrid=array();
            ?>
            <?php
            while($row=$result->fetch_assoc()):
             ?>
            <?php foreach($product_id as $id):
            ?>
            <?php if($row['id']==$id): 
            // vektor cmimi
            $arrprice[]=$row['cmimi'];
            //vektor id
            $arrid[]=$row['id']; 
                     ?>
            <form action="upload.php" method="post" class="cart-items">
                    <div class="border rounded"  >
                        <div class="row bg-white" id=<?php  echo $row['id'] ?> >
                            <div class="col-md-3 pl-0">
                             <?php echo   '<img src="../admin_dashboard/images/'.$row['img'].'" alt="Image1" class="img-fluid">' ?>
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2"><?php echo $row['produkti'] ?></h5>
                                <input name="emerP[]" type="hidden" value="<?php echo $row['produkti']; ?>">
                                <small class="text-secondary">Seller: Casa del cibo</small>
                                <h5 class="pt-2"><?php
                               
                                echo $row['cmimi']." leke" ?></h5>
                                <input type="hidden" name="cmimiP[]" value="<?php
                               
                               echo $row['cmimi']." leke" ?>">
                            
                            </div>
                            <?php     
              
                   $total= $total+( (int)$row['cmimi']); ?>
                            <div class="col-md-3 py-5">
                                <div>
                                
                                   <label >Sasia:</label>
                                    <input type="number" max="50" min="0" name="sasia[]" onchange="subtotal()"   value="1"  id="<?php echo $row['id']  ?>" style="width:50px; text-align:left; display:block;" class="form-control  d-inline text-right" >
                                   <label >NenTotali: 
                                  <div name="subtotal" style="display:inline;" ><span name="cmimi"><?php echo $row['cmimi'];  ?></span></div> </label>
                              
                                </div>
        
                              
            <a href="card.php?action=delete&id=<?php echo $id ?>" type="button" name="butoni"    class="btn btn-danger mt-4">Fshij Produktin</a>
                             
                                </div>
                               
                            
                           
                        </div>
                        
                    </div>
                  

  
              
            <?php endif; ?>
           
            <?php endforeach; ?>
            
            
            <?php endwhile;
             ?>

           
            <?php else: ?>
            
            <?php echo "<h4>Ne shporte nuk ka asnje produkt </h4>"; ?>
            <?php endif; ?>
        </div> 
     </div>    
<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
 
        <div class="pt-4">

        <h6>FATURA:</h6>
        <div class="row price-details">

        <div class="col-md-6">
        <?php
                                    if (isset($_SESSION['card'])){
                                        $count  = count($_SESSION['card']);
                                      echo "<input type='hidden' name='nr_prod' value='$count'>";  
                                        echo "<h6>Cmimi: ($count produkteve)</h6>";
                                    }else{
                                        echo "<h6>Cmimi (0 produkteve)</h6>";
                                    }
                                ?>
                                
        <h6>Transporti:</h6>
        <h6>Emri I Porostsit:</h6>
        <h6>Numri i cel:</h6>
        </div>

        <div class="col-md-6">
           
        <h6 id="prc"><?php echo $total; ?></h6>
      
        <input type="hidden" id="tot" name="totali" value="<?php echo $total; ?>">   
        <h6 class="text-seccess" style="color:green;">Falas</h6>
        <input type="text" name="emerU" required style="border:1px solid #4a4a4a; ">
        <br><br>
        <input type="text" name="nrU" required style="border:1px solid #4a4a4a; ">
        </div>

        </div>

        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success" style="margin-left:33%;">Perfundo</button>
        <br>
        </div>
        </div>
        </div>
  </form>
 
</div>
                              

<script> 
  let subtotali= 1;

  var arrsubtot=[];    
        

                function subtotal(){
                    
               <?php foreach($arrprice as $i => $price) :?>
            
                
                   var index=parseInt(<?php echo $i; ?>);
               
                    subtotali= document.getElementsByName('sasia[]')[index].value  * parseInt( <?php echo $price;?>);
                    
                   document.getElementsByName('subtotal')[index].innerHTML=subtotali;
                   
            
arrsubtot.unshift(subtotali);

            
               <?php endforeach; ?>
sum(arrsubtot);
     
 
                

 
                }
                function sum(arrsubtot){
                    var totali=0;
                    max=parseInt(<?php echo $count ?>);
                   for(i=0;i<max;i++){
                totali=totali+arrsubtot[i];
                   }
                   
                  document.getElementById('prc').innerHTML=totali;
              document.getElementById('tot').value=totali;
                }




              </script>
              
   
            

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
