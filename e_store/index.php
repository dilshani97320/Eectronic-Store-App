<?php session_start(); ?>
<?php include"config.php" ?>

<?php 
/*
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from admin where username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($GLOBALS['connection'],$sql);
    
    if(mysqli_num_rows($result)==1){

       header("location:view.php");

        
    }
    else{
        TextNode("error","password incorect");
    }
        
}

//messages
function TextNode($classname,$msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}*/


if(isset($_POST['login'])){

    $errors = array();
  
  //Check if the username and password has ben entered
  if(!isset($_POST['username'])||strlen(trim($_POST['username']))<1){
    $errors[]= 'Username is Missing/Invalid';
  }
  if(!isset($_POST['password'])|| strlen(trim($_POST['password']))<1){ 
    $errors[]= 'Username is Missing/Invalid';
  }

  //check if there are any errors in the form
  if(empty($errors)){
   //save username and password into variables
   $username =mysqli_real_escape_string($GLOBALS['connection'],$_POST['username']);
   $password=mysqli_real_escape_string($GLOBALS['connection'],$_POST['password']);
   //$hashed_password =sha1($password);


   //prepare database query
   $query="SELECT * FROM admin
           WHERE username= '{$username}'
           AND password= '{$password}'
           LIMIT 1";

   $result_set =mysqli_query($GLOBALS['connection'],$query);
   
   if($result_set){
     //query successful
     if(mysqli_num_rows($result_set) == 1){
       //valid user found
       //redirect to user.php
       
           header('Location:view.php');
      
     }
     else{
       //user name and password invalid
       $errors[]='Invalid Username / Password';
     }

   }
   else{
     $errors[]='Database query failed';
   }
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Store</title>
    
</head>
<body class="main-body bg-dark">
<div class="main">
<div class="div">
    <h1 class="text-center text-light py-5">Welcome to E-store</h1>

    <div class="container">
	<img src="./images/user.png.crdownload">
		<form method="POST" action="index.php">
			
                
            <label>
      <?php 
            if(isset($errors)&& !empty($errors)){
              echo '<p class="error">Invalid Username / Password</p>';
            }
      ?> </label>
             <div class="form-input">
				<input type="text" name="username" placeholder=" User Name" require/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"  id="password"  onkeyup="validationPassword()" equire/>
			</div>
			<input type="submit" value="LOGIN" name="login"class="btn-login"/>
		</form>
	</div>
</div>
</div>
    
</body>
</html>



<?php mysqli_close($connection); ?>