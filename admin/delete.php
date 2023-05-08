<?php
include('../connection/connect.php');

    if(isset($_GET['deleteid'])){
        $Id=$_GET['deleteid'];

        $sql="delete from `product` where Id=$Id";
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:view_product.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>