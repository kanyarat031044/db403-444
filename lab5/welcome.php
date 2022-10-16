<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>fname : <?= $_POST['fname'] ?></p>
    <p>lname : <?= $_POST['lname'] ?></p>
    <p>gender : <?= $_POST['gender'] ?></p>
    <p>dod : <?= $_POST['dod'] ?></p>
    <p>email : <?= $_POST['email'] ?></p>
    <p>Password : <?= $_POST['Password'] ?></p>
    
</body>
</html>