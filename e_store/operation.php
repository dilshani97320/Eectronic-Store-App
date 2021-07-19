<?php include "config.php";

if(isset($_POST['create'])){
    createData();
}



function createData(){
    $product_id=textboxValue("product_code");
    $product_name=textboxValue("product_name");
    $seller=textboxValue("seller");
    $price=textboxValue("price");
    $quantity=textboxValue("quantity");

    if($product_id && $product_name && $seller && $price && $quantity){
        $sql="INSERT INTO `product`(`product_code`, `product_name`, `seller`, `product_price`, `product_qnt`) VALUES ('$product_id','$product_name','$seller','$price','$quantity') ";
    
    if(mysqli_query($GLOBALS['connection'],$sql)){
        TextNode("success","Record added successfully");
    }else
    echo 'error';
    
    }else{

        TextNode("error","provide data in the textbox");
    }
}
    
    function textboxValue($value){

    
        $textbox=mysqli_real_escape_string($GLOBALS['connection'],trim($_POST[$value]));
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }

//messages
function TextNode($classname,$msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from database
function getData(){
    $sql="select * from product";

    $result=mysqli_query($GLOBALS['connection'],$sql);

    if(mysqli_num_rows($result) >0){
        return $result;
    }
}