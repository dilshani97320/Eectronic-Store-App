<?php include 'config.php' ?>
<?php include 'operation.php' ?>


<!DOCTYPE html>

<head>
   <title>crete stock</title>
</head>
<body class="bg-dark">
  <div class="row">
    <div class="col-md-9">
    <h2 class="d-flex justify-content-end mt-4 pb-5 text-light" style="margin-right:12rem;">Product Stock Dashboard</h2>
    </div>
    <div class="col-md-3 mt-4 pb-5 d-flex justify-content-end">
    <a href="logout.php"><button class="btn btn-primary px-3"style="margin-right:3rem ">Logout</button></a>
    </div>
  </div>
    
    
    <div class="container">

   
<div class="d-flex justify-content-center">
<form action="" method="post" class="w-50">
<div class="input-group py-2">
      <span class="input-group-text bg-info" id="inputGroupPrepend2"><i class="fas fa-qrcode"></i></span>
      <input type="text" class="form-control bg-secondary" autocomplete="off" placeholder="product code" name="product_code" aria-describedby="inputGroupPrepend2" style="color: white;">
    </div>

    <div class="input-group pt-3">
      <span class="input-group-text bg-info" id="inputGroupPrepend2"><i class="fas fa-file-signature"></i></span>
      <input type="text" class="form-control bg-secondary" autocomplete="off" placeholder="product name" name="product_name"  aria-describedby="inputGroupPrepend2" style="color: white;" >
    </div>
    
    <div class="input-group pt-3">
      <span class="input-group-text bg-info" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
      <input type="text" class="form-control bg-secondary" autocomplete="off" placeholder="seller name" name="seller" aria-describedby="inputGroupPrepend2" style="color: white;" >
    </div>
    <div class="row">
        <div class="col">
        <div class="input-group pt-3">
      <span class="input-group-text bg-info" id="inputGroupPrepend2"><i class="fas fa-dollar-sign"></i></span>
      <input type="text" class="form-control bg-secondary" autocomplete="off" placeholder="price" name="price"  aria-describedby="inputGroupPrepend2"  style="color: white;" >
    </div>
    </div>
    <div class="col">
        <div class="input-group pt-3">
      <span class="input-group-text bg-info" id="inputGroupPrepend2"><i class="fas fa-box-open"></i></span>
      <input type="text" class="form-control bg-secondary" autocomplete="off" placeholder="quantity" name="quantity" aria-describedby="inputGroupPrepend2" style="color: white;" >
    </div>
    </div>
    </div>
    <div class="d-flex py-4">
        <div class="col "style="margin-left:1rem;">
            <button class="btn btn-success px-5 " id="btn-create" name="create"><i class="fas fa-plus text-light"></i></button>
        </div>
        <div class="col">
        <button class="btn btn-primary px-5" id="btn-read" name="read"><i class="fas fa-sync-alt text-light"></i></button>
        </div>
        <div class="col">
        <button class="btn btn-warning px-5" id="btn-update" name="update"><i class="fas fa-edit text-light"></i></button>
        </div>
        <div class="col">
        <button class="btn btn-danger px-5" id="btn-delete" name="delete"><i class="fas fa-trash text-light"></i></button>
        </div>
    </div>
</form>

</div>

<!--table-->

<table class="table mt-5 table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">product code</th>
      <th scope="col">Product</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php
  if(isset($_POST['read'])){
   $result= getData();
   if($result){
     while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['product_code'];?></td>
<td><?php echo $row['product_name'];?></td>
<td><?php echo $row['seller'];?></td>
<td><?php echo $row['product_price'];?></td>
<td><?php echo $row['product_qnt'];?></td>
<td><i class="fas fa-edit btnedit"></i></td>
</tr>


<?php
     }
   }
}

  ?> 
  </tbody>
</table>

</body>
</html>