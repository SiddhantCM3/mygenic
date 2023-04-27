<html lang="en">

    <head>
    <title>Harvest vase</title>
    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
    <style>
        /* 
* Design by Robert Mayer:https://goo.gl/CJ7yC8
*
*I intentionally left out the line that was supposed to be below the subheader simply because I don't like how it looks.
*
* Chronicle Display Roman font was substituted for similar fonts from Google Fonts.
*/

.wrapper {
  height: 420px;
  width: 830px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 420px;
  width: 327px;
  background-color: cadetblue;
}

.product-img img {
  border-radius: 7px 0 0 7px;
}

.product-info {
  float: left;
  height: 420px;
  width: 500px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.product-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
    </style>
    </head>

    <body>
    <?php
            require 'Admin/connect.php';
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn,$sql);
            $check_crud = mysqli_num_rows($result) > 0;
                if($check_crud)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>

            <div class="wrapper">
                <div class="product-img">
                  <?php echo '<img class="card-img-top" src="admin_panel\Images'.$row['product_image'].'" width="100px"; height="100px"; alt=" ">' ?>
                </div>
                <div class="product-info">
                <div class="product-text">
                    <h1><?php echo $row['product_name']; ?></h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Product Chemical:</b> <?php echo $row['product_chemical']; ?></li>
                        <li class="list-group-item"><b>Product Form:</b> <?php echo $row['product_form']; ?></li>
                        <li class="list-group-item"><b>Company Name:</b> <?php echo $row['company_name']; ?></li>
                        <li class="list-group-item"><b>Product Storage:</b> <?php echo $row['product_storage']; ?></li>
                        <li class="list-group-item"><b>Product Packing:</b> <?php echo $row['product_packing']; ?></li>
                        <li class="list-group-item"><b>Product Category:</b> <?php echo $row['product_category']; ?></li>
                        <li class="list-group-item"><b>Parent ID:</b> <?php echo $row['parent_id']; ?></li>
                    </ul>               
                 </div>
                </div>
            </div>
            <?php
                            
                        }
                    }
                    else
                    {
    
                    }
            ?>
    </body>

</html>






<div class="col-lg-8 col-md-8 col-sm-12" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
    <div id="cards_landscape_wrap-2">
        <?php
            require 'Admin/connect.php';
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn,$sql);
            $check_crud = mysqli_num_rows($result) > 0;
                if($check_crud)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                      <div class="col-lg-12 col-md-12 col-cm-12">
                         <div class="card" style="width: 18rem;">
                                <?php echo '<img class="card-img-top" src="admin_panel\Images'.$row['product_image'].'" width="100px"; height="100px"; alt=" ">' ?>

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Product Chemical:</b> <?php echo $row['product_chemical']; ?></li>
                                    <li class="list-group-item"><b>Product Form:</b> <?php echo $row['product_form']; ?></li>
                                    <li class="list-group-item"><b>Company Name:</b> <?php echo $row['company_name']; ?></li>
                                    <li class="list-group-item"><b>Product Storage:</b> <?php echo $row['product_storage']; ?></li>
                                    <li class="list-group-item"><b>Product Packing:</b> <?php echo $row['product_packing']; ?></li>
                                    <li class="list-group-item"><b>Product Category:</b> <?php echo $row['product_category']; ?></li>
                                </ul>
                          </div>
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