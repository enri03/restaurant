<?php
session_start();
if(isset($_POST['register'])){


        require '../php/database.php';    //lidhja me databazan
        $email=$_POST['email'];
        $datelindja=$_POST['birthday'];
        $gjinia=$_POST['gender'];
        $pass=$_POST['pass'];
        $configpass=$_POST['configpass'];
        if(empty($email)||empty($datelindja)||empty($pass)||empty($configpass)){
            header('Location: register.php?error=fushaboshe');
            exit();
        }
        else if ($pass!=$configpass){
            header('Location: register.php?error=pasworderror');
            exit();
        }
        else{
            $sql="SELECT email FROM users WHERE email=?";//query
            $stmt=mysqli_stmt_init($conn);//statment init
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: register.php?error=sql_error");
            exit();
            }
            else{ mysqli_stmt_bind_param($stmt,"s",$email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $rowcounts=mysqli_stmt_num_rows($stmt);
    
              // do te thote count> 0 qe tashme ekziston nje username i njejte ne databaze keshtu qe na duhet  te shfaqim nje mesh errori ne front end
                if($rowcounts>0){
                    header("Location: register.php?error=sql_error_usrename_I_rregjistruar_me_pare");
                    exit();
    
                }
                //email verification
                else{
                    
                    //Rregjistrimi i vlerave
                    $sql="INSERT INTO users (email,datelindja,gjinia,pass,configpass) VALUES (?,?,?,?,?)";
                        $stmt=mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            header("Location: register.php?error=empyfileds?error=sql_error");
                        exit();
                        } else {
                            $_SESSION['mesazhi']="Rregjistrimi u krye me sukses!!";
                            $_SESSION['type']="success";
    
                            
                             $hash_psw=password_hash($pass,PASSWORD_DEFAULT);
                              mysqli_stmt_bind_param($stmt,"sssss",$email,$datelindja,$gjinia,$hash_psw,$hash_psw);
                                  mysqli_stmt_execute($stmt);
    
                                 
                                  header("Location: register.php?success=vlera_u_rregjistrua");
                    exit();
    
                            }
    
    
    
                }
                //else para se te shtoja email verification
                    
                       //-------------
    
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn); 





    }
      