<?php
include "connect.php";

include "crud.php";
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
   
    
<form action="crud.php" method="POST">
    <input type="text" name="firstname" placeholder="firstname">
    <input type="text" name="lastname" placeholder="lastname">
    <input type="text" name="birthday" placeholder="birthday">
    <button type="submit" name="create-submit">create</button>
    <br>
    <br>
    <input type="text" name="read" placeholder="read">
    <input type="text" name="id" placeholder="id">
    <button type="submit" name="read-submit">read</button>
    <br>
    <br>
    <input type="text" name="update" placeholder="update">
    <button type="submit">update</button>
    <br>
    <br>
    <input type="text" name="delete" placeholder="delete">
    <button type="submit" name="delete">delete</button>
</form>
</body>



</html>