<?php
    include_once('config.php');

    $result = mysqli_query($con,'SELECT * from persons ORDER BY id ');


?>

<html>
    <head>

    </head>
    <body>
        <table >
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Department</th>
                <th>date</th>
            </tr>

            <?php
                while($res = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$res['name']."</td>";
                    echo "<td>".$res['gender']."</td>";
                    echo "<td>".$res['department']."</td>";
                    echo "<td>".$res['date']."</td>";
                    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
                    echo "<td><a href=\"delete.php?id=$res[id]\">Delete</a></td>";
                    echo "</tr>";
                } 
            ?>

        </table>
    </body>
</html>