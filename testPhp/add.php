<?php
    include_once('config.php');
    
    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $date = $_POST['date'];

        $result = mysqli_query($con , "INSERT INTO persons(name, gender,department,date) values('$name','$gender','$department','$date')" );

        if($result){
            echo '<br>update successful';
            echo "</br><a href='./show.php'>Show Result</a>";
        }else{
            echo '<br>not update';
        }

    }


?>