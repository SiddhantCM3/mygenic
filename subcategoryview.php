<?php include("header.php"); ?>
<?php include("carousel.php"); ?>

<div class="container py-5">
    <div class="row">
        <?php
               require ('connection/connect.php');
                
               $category_name=$_GET['category_name'];
               $sql = "SELECT * FROM `category` WHERE category_name='$category_name'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;
    
               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                <div class="col-md-4">
                  <a href="productsview.php?category_id=<?php echo $row['category_id']; ?>">
                        <div class="card" style="width: 18rem;">
                                <?php echo '<img class="card-img-top" src="./admin/category_images/'.$row['category_image'].'" width="100px"; height="100px"; alt=" ">' ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['category_name']; ?></h5>
                                </div>
                        </div>
                   </a>
               </div>

             <?php
                  }
                }
             else
              {
    
              }
            ?>
    </div>
</div>


<?php include("footer.php")?>