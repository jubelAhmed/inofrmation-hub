
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: http://localhost:80/information-hub/index.html ');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello mr</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati labore adipisci quaerat, eveniet quasi optio, dolores laudantium vero, neque cumque pariatur eius distinctio laborum ipsum atque officia perferendis dolor praesentium!</p>
    <button><a href="./logout.php">Log out</a></button>
</body>
</html>