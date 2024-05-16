<?php
include("connection.php");
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>EA Store</title>
</head>
<body>

<section class="features" id="features">

    <h1 class="heading"> our <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/laptoplog.png" alt="">
            <h3>Laptop</h3>
            <p></p>
            <a href="prolaptops.php" class="btn">View All Product</a>
        </div>


        <div class="box">
            <img src="images/mobilelogo.png" alt="">
            <h3>Mobile</h3>
            <p></p>
            <a href="promobiles.php" class="btn">View All Product</a>
        </div>


    </div>
    <br> <br>
<div class="box-container">

        <div class="box">
            <img src="images/cameralogo1.png" alt="">
            <h3>Camera</h3>
            <p></p>
            <a href="procameras.php" class="btn">View All Product</a>
        </div>

        <div class="box">
            <img src="images/speakerlogo1.png" alt="">
            <h3>Speaker</h3>
            <p></p>
            <a href="prospeakers.php" class="btn">View All Product</a>
        </div>
    </div>

</section>
<!-- home section ends -->


</body>
</html>
<?php
    include("footer.php");
?>