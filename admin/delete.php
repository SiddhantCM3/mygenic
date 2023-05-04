<?php
include('../connection/connect.php');

    if(isset($_GET['deleteid'])){
        $product_id=$_GET['deleteid'];

        $sql="delete from `product` where product_id=$product_id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:view_product.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>