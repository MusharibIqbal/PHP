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
                <div class="col-md-3">
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
                        <h2 class="title">Fashion</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <img src="./img/1m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs. 990</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">Shirt &nbsp; Brand: Levis</a></h2>    
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
                            <h2 class="product-name"><a href="#">Trouser &nbsp; Brand: Outfitters</a></h2>
                            
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
                            <h2 class="product-name"><a href="#">Tank-Top &nbsp; Breakout</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                               
                            </div>
                            <img src="./img/4m.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs3595</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
                                <p> 4.5 <p>
                            </div>
                            <h2 class="product-name"><a href="#">ELectronics</a></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
 <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Sports</h2>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <img src="./img/product06.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs. 13000</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <p>4.5</p>
                            </div>
                            <h2 class="product-name"><a href="#"> Model: SP16 &nbsp; Brand: propakistani</a></h2>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <img src="./img/b2.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs2575</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
<p>4.5</p>
                            </div>
                            <h2 class="product-name"><a href="#">Laptop harddrive</a></h2>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product product-single">
                        <div class="product-thumb">		
                            <img src="./img/b3.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs7700 </h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
<p>4.5</p>
                            </div>
                            <h2 class="product-name"><a href="#">Speakers</a></h2>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                               
                            </div>
                            <img src="./img/b4.jpg" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rs32.50</h3>
                            <div class="product-rating">
                            <i class="fa fa-star"></i>
<p>4.5</p>
                            </div>
                            <h2 class="product-name"><a href="#">AC Adapter</a></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
             <?php include_once 'footer.php'; ?>

</body>

</html>
