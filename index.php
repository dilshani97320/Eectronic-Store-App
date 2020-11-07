<?php include('server.php'); 

//fetch the record to be update
if(isset($_GET['edit'])){
   $id=$_GET['edit'];
   $edit_state=true;
   $rec=mysqli_query($db,"SELECT * FROM info WHERE id=$id");
   $record=mysqli_fetch_array($rec);
   $product=$record['product'];
   $seller=$record['seller'];
   $price=$record['price'];
   $id=$record['id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    
 <?php if(isset($_SESSION['msg'])): ?>

  <div class="msg">
       <?php  
echo $_SESSION['msg'];
unset($_SESSION['msg']);
       ?>
  </div>
<?php endif ?>

    <div class="container">
        <h1>Electronic Store</h1>
    </div>

    <div class="container2">

<form method="post" action="server.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <!--<input type="text" name="id" placeholder="ID">-->
    <input type="text" name="product" placeholder="Product Name" value="<?php echo $product; ?>">
    <input class="same" type="text" name="seller" placeholder="Seller" value="<?php echo $seller; ?>">
    <input class="same" type="text" name="price" placeholder="Price" value="<?php echo $price; ?>">



    </div>

    <!--create update delete create buttons-->
    <div class="buttonbox">

       <?php if($edit_state == false): ?>
         <button type="submit" class="btn1" name="create">create</button>
         <?php else:?>
        <button type="submit" class="btn3" name="update">Update</button>
        <?php endif ?>

       <button type="submit" class="btn2" name="read">Read</button>
       
       <button type="submit" class="btn4" name="delete">Delete</button>
    </div>
</form >
    <div class="tablebox">

        <table>
            <thead>
                <tr>
                
                    <th scope="col">Product Name</th>
                    <th scope="col">Seller</th>
                    <th scope="col">Price</th>
                    <th colspan="2">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($result)){?>
                <tr>
                    
                    <td><?php echo $row['product'] ?></td>
                    <td><?php echo $row['seller'] ?></td>
                    <td>$<?php echo $row['price'] ?></td>
                    <td><a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a class="delete_btn" href="server.php?delete=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>