<?php
$host ='localhost';
$username = 'root';
$password = '';
$dbname = 'e_store';

//create connection
$connection = new mysqli($host,$username,$password,$dbname);
//check connection
if($connection->connect_error){
    die("connection faild" . $connection->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./style/css/style.css">
    <script src="https://kit.fontawesome.com/e9ec357a27.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="./style/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script src="./style/js/main.js"></script>
</body>
</html>

