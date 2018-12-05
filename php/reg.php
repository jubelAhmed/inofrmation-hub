<?php

    include_once("config.php");

    if(isset($_POST["login"])){
     
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $birthDay = $_POST['birthDay'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];
        $pass = $_POST['password'];
        $password = md5($pass);

        try{

            $query = $conn->prepare("INSERT INTO registration_users ( first_name , last_name , email , birthday , occupation , gender , password ) values(:first_name , :last_name , :email , :birthday , :occupation , :gender , :password) ");

            $query->bindparam(":first_name" , $firstName);
            $query->bindparam(":last_name" , $lastName);
            $query->bindparam(":email" , $email);
            $query->bindparam(":birthday" , date_format(date_create($birthDay),"Y-m-d"));
            $query->bindparam(":occupation" , $occupation);
            $query->bindparam(":gender" , $gender);
            $query->bindparam(":password" ,$password);

           
            $result = $query->execute();
            
            if($result){
                exit("success");
            }
            else{
                exit("error");
            }
            
        }catch(PDOException $e){
            echo "Error ". $e.getMessage() ;
        }
        
    }

?>