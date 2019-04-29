<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>OneTECH</title>

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
	$ID=1;
    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM product where id=$ID";

    $result = mysqli_query($connection, $sql);
    ?>

</head>

<body>
        <div class="container">
            <div class="row">
				<?php
				include 'header.php'; ?> 			
				<?php          
            while ($row = mysqli_fetch_assoc($result)) {
			?>
			 <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div id="product-main-view">
                            <div class="product-view">
                                <img src="./img/1.png" alt="">
                            </div>   
                        </div>     
                    </div>
                    <div class="col-md-6">
                        <div class="product-body">
                           
                            <h2 class="product-name"><?php echo $row['Name']?> </h2>
							
                            <div>
                                <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <p>4.5</p>
                                </div>                               
                            </div>
                            <p><strong>Brand:</strong><?php echo $row['Brand'];?> </p>
                            <p>
                                 <?php echo $row['detail'];?>
                            </p>
                            <div class="product-options">
                            </div>
                            <div class="product-btns">
                                <div class="qty-input">
                                    <span class="text-uppercase">QTY: </span>
                                    <?php echo $row['Quantity'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="product-tab">
                            <ul class="tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                                <li><a data-toggle="tab" href="#tab1">Details</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane fade in active">
                                    <p>
                                        <?php echo $row['detail'];?>
                                    </p>
                                </div>
                                <div id="tab2" class="tab-pane fade in">                  
            </div>
        </div>
    </div>
   <?php 
   include 'footer.php'; ?>
</body>
</html>
