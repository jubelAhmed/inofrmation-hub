<?php
    include_once('config.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $date = $_POST['date'];

        $result = mysqli_query($con , "UPDATE persons SET name = '$name' , gender='$gender' , department='$department' , date='$date' where id = $id ");

        if($result){
            header('location:show.php');
        }else{
            echo 'error occureed';
        }
    }

?>

<?php
    $id = $_GET['id'];

    $result = mysqli_query($con , "SELECT * from persons WHERE id=$id");

    while($res = mysqli_fetch_array($result)){
        $name = $res['name'];
        $gender = $res['gender'];
        $department = $res['department'];
        $date = $res['date'];
    }
?>

<html>
    <head></head>
    <body>
        <form action="edit.php" method='POST'>
        <table>
            <tr>
                <td class="tdLabel">Name:</td>
                <td><input type="text" id="name" name="name" value = "<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td class="tdLabel">
                    <label>Gender: </label>

                </td>
                <td>
                   
                    <label for="male"><input type="radio" name="gender" id="male" value='male' 
                    <?php 
                     if($gender==='male') echo 'checked' ?> >Male</label>
                    <label for="female"><input type="radio" name="gender" id="female" value='female' 
                    <?php 
                     if($gender==='female') echo 'checked' ?> >Female</label>
                    <label for="others"><input type="radio" name="gender" id="others" value='others'    <?php 
                     if($gender==='others') echo 'checked' ?> >Others</label></td>

            </tr>
            <tr>
                <td class="tdLabel">Department</td>
                <td>
                    <select name="department" id="depertment">
                        <option value="swe"  <?php 
                     if($department==='swe') echo 'selected' ?>  >SWE</option>
                        <option value="cse" <?php 
                     if($department==='cse') echo 'selected' ?> >CSE</option>
                        <option value="ete" <?php 
                     if($department==='ete') echo 'selected' ?> >ETE</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="tdLabel">Date</td>
                <td><input type="date" name="date" id="date" value="<?php echo $date?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" id='id' name='id' value=" <?php echo $id ?>" > </td>
                <td >
                    <button type="submit" name="update" value="update">UPDATE</button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>