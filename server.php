<?php 
session_start();
//initialize variables
$id=0;
$product="";
$seller="";
$price="";
$edit_state=false;
//connect to database
$db=mysqli_connect('localhost','root','','store');

//if save btn is clicked
if(isset($_POST['create'])){
	//$id=$_POST['id'];
	$product=$_POST['product'];
	$seller=$_POST['seller'];
	$price=$_POST['price'];
	

$query="INSERT INTO info(product,seller,price) VALUES('$product','$seller','$price')";
mysqli_query($db,$query);
$_SESSION['msg']="Address saved"; 
header('location:index.php');
}


//update records
if(isset($_POST['update'])){
   $product = mysqli_real_escape_string($_POST['product']);
	$seller = mysqli_real_escape_string($_POST['seller']);
	$price = mysqli_real_escape_string($_POST['price']);
	$id = mysqli_real_escape_string($_POST['id']);

mysqli_query($db,"UPDATE info SET product='$product',seller='$seller',price='$price' WHERE id=$id");
$_SESSION['msg']="Address updated";
header('location:index.php');
}

//delete records
if(isset($_GET['delete'])){
   $id=$_GET['delete']
;
mysqli_query($db,"DELETE FROM info WHERE id=$id");

$_SESSION['msg']="Address deleted";
header('location:index.php');
}

//retrive records
$result=mysqli_query($db,"SELECT * FROM info");
 ?>
