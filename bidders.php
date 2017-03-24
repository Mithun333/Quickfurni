
<!DOCTYPE html>
<html>
<head>
<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->

<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/imagezoom.js"></script>
</head>
<body>
<!--header-->
<div class="header" style="position: fixed;
    z-index: 1030;
    width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 15px;">
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="index.php">Quick Furni</a></h1>
				</div>
		  	<div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="index.php">Home</a></li>	
				      <li><a class="color1" href="#">Products</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<p><b><u>Home Furnitures</u></b></p>
										<li><a href="products.php">Chairs</a></li>
										<li><a href="products.php">Sofha</a></li>
										<li><a href="products.php">TV Set</a></li>
										<li><a href="products.php">Show Case</a></li>
										<li><a href="products.php">Oldage Chairs</a></li>
										<li><a href="products.php">Windows</a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<p><b><u>Kitchen Appliences</u></b></p>
										<li><a href="products.php">Daining Table</a></li>
										<li><a href="products.php">Cabords</a></li>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<p><b><u>Study Furnitures</u></b></p>
										<li><a href="products.php">Computer Tables</a></li>
										<li><a href="products.php">Study Tables</a></li>
										<li><a href="products.php">Book Tables</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
					<?php 
						if(!isset($_SESSION['mail'])) {?>
							
						<li><a class="color4" href="#" data-toggle="modal" data-target="#myModal4">login</a></li>	
						<li><a class="color4" href="#" data-toggle="modal" data-target="#myModal5">Sign up</a></li>

						<?php }else{ ?>
						<li><a class="color6" href="sell.php">Sell Your Products</a></li>
						<li><a class="color6" href="sell.php">Wish List</a></li>
						<li><a class="color6" href="logout.php">LogOut</a></li>
						
				
						<?php } ?>
						
				

				<li><a class="color6" href="contact.php">Contact</a></li>
			  </ul> 
				
					<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
	<!-- grow -->
		<div class="product">
			<div class="container" style="margin-top:80px;">
				<div class="product-price1">
				<div class="top-sing">
				<div class="col-md-8 single-top">	
				<div class="tb">
			  		<table border="1" width="500">
						<thead>
							<tr>
								<th>Name</th>
								<th>Bid Ammount</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
						<?php
								$pid=$_GET['pid'];
								mysql_connect('localhost','root','');
								mysql_select_db("quickfurni");
								$query = "SELECT u.fname,u.lname,p.p_title,b.amount,b.b_time from tbluser u,product p,bidder b where p.p_id = b.p_id and u.user_ID=b.user_id and b.p_id=$pid order by b.amount desc";
								$res = mysql_query($query);
								while($out=mysql_fetch_array($res))
								{
						?>
						
                        	<tr>
								<td><?php echo $out[0]?> <?php echo $out[1]?></td>
								<td><?php echo $out[3]?></td>
								<td><?php echo $out[4]?></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
						</div>

	<div class="clearfix"> </div>
<!-- slide -->

					</div>	

						<!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
						    animation: "slide",
						    controlNav: "thumbnails"
						  });
						});
						</script>
						<!--End of script-->
					<div class="col-md-4 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>Lorem Ipsum</h4>
							<div class="star-on">
								
								<div class="review">
									<a href="#"> 1 customer review <i class="fa fa-userx wc-icon"></i></a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">$ 500.00</h5>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed 
diam nonummy nibh euismod tincidunt ut laoreet dolore 
magna aliquam erat </p>
						<div class="available">
							<ul><form>
									<li><input type="text" name="bid_amt" placeholder="Add a your bid here"/></li>
									<li><input class="bid" type="submit" value="ADD BID"></li>
								</form>
							</ul>
						</div>
								<a href="#" class="add-cart">ADD TO CART</a>
						</div>
					</div>
				<div class="clearfix"> </div>
				</div>
			<!---->

		<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
						</div>						
					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
						</div>					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>	
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
						</div>					</div>
					<div class="clearfix"> </div>
				</div>
</div>

		<div class="clearfix"> </div>
		</div>
		</div>
<!--//content-->
<div class="footer w3layouts">
				<div class="container">
			<div class="footer-top-at w3">
			
				<div class="col-md-3 amet-sed w3l">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.php">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-3 amet-sed w3ls">
					<h4>CATEGORIES</h4>
					<ul class="nav-bottom">
						<li><a href="#">Bed linen</a></li>
						<li><a href="#">Cushions</a></li>
						<li><a href="#">Duvets</a></li>
						<li><a href="#">Pillows</a></li>
						<li><a href="#">Protectors</a></li>	
					</ul>
					
				</div>
				<div class="col-md-3 amet-sed agileits">
					<h4>NEWSLETTER</h4>
					<div class="stay agileinfo">
						<div class="stay-left wthree">
							<form action="#" method="post">
								<input type="text" placeholder="Enter your email " required="">
							</form>
						</div>
						<div class="btn-1 w3-agileits">
							<form action="#" method="post">
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
					
				</div>
				<div class="col-md-3 amet-sed agileits-w3layouts">
				<h4>CONTACT US</h4>
					<p>Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office :  +12 34 995 0792</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class w3-agile">
		<p>© 2015 Mattress . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
			