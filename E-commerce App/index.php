	<!DOCTYPE html>
<html lang="en">

<head>

<?php

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-SHOP HTML Template</title>
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
		<?php
    require_once("config.php");
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME);

    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM product";

    $result = mysqli_query($connection, $sql);
    ?>
</head>
<body>
   <?php
    include_once 'header.php'; 
   ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Fashion</h2>
                    </div>
                </div>
		<div class="row">
	 <div class="col-md-12">
	 <?php
            $count = 1;
            while ($row = mysqli_fetch_assoc($result)) {
			if($count%4==0){
			?>
			<?php
			 }
			 ?>
					<div class="col-md-3">
                    <div class="product product-single">
                        <div class="product-thumb">
							<a href="product-page.php?id=<?= $count ?>">
                            <img src="./img/<?php echo $count.".png"?>" alt=>
                        </div>
                        <div class="product-body">
                            <h3 class="product-price"><?php  echo $row['Quantity']?></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">Model:<?php echo $row['Name']?>  &nbsp; Brand: <?php echo $row['Brand']?></a></h2>
                            
                            
                        </div>
                    </div>
                </div>  
                </div>
                <?php
                if ($count % 4 == 0) {
                    ?>
                    <br />
                <?php
            }
            ?>
                <?php
                $count++;
            }
            ?>
			</div>
             </div>   
			 </div>
                       <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Mobiles</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/1m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs. 1000</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">Model:YC &nbsp; Brand: Huwavai</a></h2>    
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <img src="./img/2m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs78000</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">Model:Y8 &nbsp; Brand: Huwavai</a></h2>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="product product-single">
                        <div class="product-thumb">		
                            <img src="./img/1m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs57500 </h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">Model:Y9 &nbsp; Brand: Huwavai</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                               
                            </div>
                            <img src="./img/4m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs32.50</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">HP laptop</a></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
 <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Bags</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/product06.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs. 1000</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Model:123 &nbsp; Brand: Service</a></h2>
                            
                            
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/b2.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs32.50 <del class="product-old-price">Rs45.00</del></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">School Bag</a></h2>
                            
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
								
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/b3.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs32.50 <del class="product-old-price">Rs45.00</del></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Bag</a></h2>
                           
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
                <!-- Product Single -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                               
                            </div>
                            <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                            <img src="./img/b4.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs32.50</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">Travelers Bag</a></h2>
                            
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
            </div>
                <!-- /section -->
                <!-- FOOTER -->
             <?php include 'footer.php'; ?>

</body>

</html>
