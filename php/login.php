<?php
    include_once('config.php');

    session_start();

    
    $email = $_POST['email'];
    $password =  $_POST['password'];
      
    if(!empty($email) && !empty($password))
    {
        $pass = md5($password);

        $sql = "SELECT * from registration_users where email='$email' AND password='$pass' " ;

        $result  = $conn->query($sql);

     
        if($result->rowCount() >0 ){
            $_SESSION["valid"] = '1';
            $_SESSION["email"] = $email;
            exit("success");
            
		} else {
           
            exit("error");
           	
        }
        if(isset($_SESSION["valid"]) && $_SESSION['valid'] == '1' ){
            echo "valid php session";
            header("location:hidden.php");
            exit();
        }

    }

?>