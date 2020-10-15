<!--
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                      
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>

 -->


 <!-- new section -->

 <!DOCTYPE html>
<html lang="zxx">
<head>
	<title>AmuthuKade.com</title>

	<!-- header styles -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="cssh/bootstrap.min.css"/>
	<link rel="stylesheet" href="cssh/flaticon.css"/>
	<link rel="stylesheet" href="cssh/style.css"/>
	<!-- header styles -->
<style>
.col-xl-4.col-lg-5 {
    padding-top: 5px;
}
</style>
</head>
<body>
	

	<!-- Header section -->
<header class="header-section">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 text-center text-lg-left">
					<!-- logo -->
					<a href="./index.html" class="site-logo">
						<img src="himg/logo.png" alt="">
					</a>
				</div>
				<div class="col-xl-6 col-lg-5">
					<form class="header-search-form">
						<input type="text" placeholder="Search here ....">
						<button><i class="flaticon-search"></i></button>
					</form>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="user-panel">
						<div class="up-item">
							<i class="flaticon-profile"></i>
							<a href="../LOGIN/login.html">Sign</a> In or <a href="../CREAT_ACCOUNT/create_account.html">Create Account</a>
						</div>
						<div class="up-item">
							<div class="shopping-card">
								<i class="flaticon-bag"></i>
								<?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
							</div>
                            <a href="cart.php">Shopping Cart</a> 
                            
                       



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="main-navbar">
		<div class="container">
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Computer & Accessories</a></li>
				<li><a href="#">Catalog</a></li>
				<li><a href="#">Grocery Store</a></li>
				<li><a href="#">Fruits & Vegitables</a></li>
				
			</ul>
		</div>
	</nav>
</header>
<!-- Header section end -->








	<!--====== Javascripts & Jquery ======-->
	<script src="jshead/jquery-3.2.1.min.js"></script>
	<script src="jshead/bootstrap.min.js"></script>
	<script src="jshead/jquery.slicknav.min.js"></script>
	<script src="jshead/jquery.zoom.min.js"></script>
	<script src="jshead/main.js"></script>

	</body>
</html>



