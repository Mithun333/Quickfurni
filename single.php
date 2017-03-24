<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/image_slieder.css" rel="stylesheet" type="text/css" media="all" />
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
		<!--  PHP code to show active Session  -->
			<?php
					if(isset($_GET['flag']))
						if($_GET['flag'] == 0)
						{
					?>	
							<script type="text/javascript">
							$(document).ready(function(){
								$("#errorModal").modal({backdrop: 'static',keyboard: false});
							});
							</script>
					<?php
						}
					?>
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
					session_start();
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

	<?php
								$pid = $_GET['p_id'];
								mysql_connect('localhost','root','');
								mysql_select_db("quickfurni");
								$query = "select max(amount) from bidder where p_id=$pid";
								$res = mysql_query($query);
								while($out=mysql_fetch_array($res))
								{
									$amt=$out[0];
								}
	?>
	<!-- grow -->
		<div class="product">
			<div class="container" style="margin-top:80px;">
				
				<div class="product-price1">
				<div class="top-sing">
				<div class="col-md-7 single-top">
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />	
						<div class="flexslider">
		
			  <ul class="slides">
			  		<?php
								$pid = $_GET['p_id'];
								mysql_connect('localhost','root','');
								mysql_select_db("quickfurni");
								$query = "select * from product where p_id=$pid";
								$res = mysql_query($query);
								while($out=mysql_fetch_array($res))
								{
									$pid=$out[0];
				?>
			    <li style="height:339px" data-thumb="<?php echo $out[12]?>">
			        <div class="thumb-image"> <img style="height:339px" src="<?php echo $out[12]?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			     <li style="height:339px" data-thumb="<?php echo $out[13]?>">
			        <div class="thumb-image"> <img style="height:339px" src="<?php echo $out[13]?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			     <li style="height:339px" data-thumb="<?php echo $out[14]?>">
			        <div class="thumb-image"> <img style="height:339px" src="<?php echo $out[14]?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			   	  <li style="height:339px" data-thumb="<?php echo $out[15]?>">
			        <div class="thumb-image"> <img style="height:339px" src="<?php echo $out[15]?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			 
			  </ul>
			 
		</div>

	<div class="clearfix"> </div>
<!-- slide -->

					</div>	

						<!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						

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
					<div class="col-md-5 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
								<h4><?php echo $out[3]?></h4>
									<div class="star-on">
										
										<div class="review">
											<a href="#"> 1 customer review <i class="fa fa-userx wc-icon"></i></a>
											
										</div>
									<div class="clearfix"> </div>
									</div>
									
									<h5 class="item_price">Rs <?php echo $out[6] ?></h5>
									<p><?php echo $out[3] ?><br>Used : <?php echo $out[8]?> Years<br>Type : <span style="color:red"><?php echo $out[5]?></span></p>
									<div class="available">
									
									<ul id="hidebuy">
										 <?php
					                    	if($out[4] == "On Bid")
					                    	{
					                    ?>

					                    		<div>
        											Bid will Be close in : <p id="future_date" style="color: red; margin-top: -25px; margin-left: 148px; "><?php echo $out[8] ?></p>
					                    		</div>
					                    		<li><input class="bid" type="button" value="I Wish To Bid" onclick="showbid()"></li>
	
										<?php
					                    	}else{
					                    ?>
					                    		
												<li><input class="bid" type="button" value="I Wist To Buy"></li>
												<li style="margin-left: -57px;"><input class="bid" type="button" value="Add To Cart"></li>
										<?php
											}
										?>
									</ul>
								</div>
								<script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
									<script type="text/javascript">
							$(function(){
								
								var data= $('#future_date').text();
								$('#future_date').countdowntimer({
									dateAndTime : data,
									size : "lg",
									regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})"
									 });
			
							});
					</script>
								<script type="text/javascript">
									function showbid()
									{
										document.getElementById("hidebuy").style.display="none";
										document.getElementById("show").style.display="block";
									}
								</script>
								<div class="available" id="show" style="display:none">
									 <p>Please Enter Your Bid Above <spam style="color:red"> <?php echo $amt ?></spam></p>
									<ul><form action="add_bid.php" method="POST">
											<input type="hidden" name="pid" value="<?php echo $pid?>">
											<li><input type="text" name="bid_amt" placeholder="Add a your bid here"/></li>
											<li><input class="bid" type="submit" value="ADD BID"></li><br>
											
										</form>
									</ul>
								</div>
								
						</div>
					</div>
				    <?php
			  		}
			  	?>
				<div class="clearfix"> </div>
				</div>
			<!---->
			<h2 class="text">You May Also Like</h2>
			<div class=" bottom-product">
					<?php
								$pid = $_GET['p_id'];
								mysql_connect('localhost','root','');
								mysql_select_db("quickfurni");
								$query = "select * from product order by p_id desc limit 4";
								$res = mysql_query($query);
								while($out=mysql_fetch_array($res))
								{
					?>
					<div class="col-md-3 bottom-cd simpleCart_shelfItem extra">
						<div class="product-at ">
							<a href="single.php?p_id=<?php echo $out[0] ?>"><img class="img-responsive" src="<?php echo $out[12]?>" alt="">
							<div class="pro-grid" style="margin-top: -250px;">
										<span class="buy-in">View Details</span>
							</div>
						</a>	
						</div>
						<p class="tun" style="margin-top: 10px;"><span style="font-size: 21px; font-family:bold;"><?php echo $out[3] ?></span><br><?php echo $out[7] ?><br>Used : <?php echo $out[8]?> Years<br>Type : <span style="color:red"><?php echo $out[5]?></span></p>
						<div class="ca-rt" style="margin-top: -90px;">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>						
						</div>						
					</div>
					<?php
						}
					?>
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
						<li><a href="contact.html">Location</a></li>
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
		<div class="modal fade" id="errorModal">
			<div class="modal-dialog" role="document" style="margin-top: 300px;">
					<div class="modal-content modal-info" style="width: 183%;">
					<div class="modal-header">
						<h3 class="text-danger" align="center">ERROR</h3>
					</div>
					<div class="modal-body modal-spa">
						<div class="login-grids">
							<h4 class="alert alert-danger">Please LogIn Before Bidding. </h4>
						</div>
						<div class="login-grids">
							<button class="btn btn-danger" style="margin-left: 400px;" data-dismiss="modal" aria-label="Close">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- login -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info" style="width: 183%;">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="" method="POST">
											<h2>Login </h2>
											<input type="text" name="txtEmail" placeholder="Ex:abc@gmail.com" onfocus="this.value = '';" onblur="if (this.value == '') " required align="center"/>	
											<input type="password" name="txtPassword" placeholder="**********" onfocus="this.value = '';" onblur="if (this.value == '')" required/>	
											<h4><a href="#">Forgot password ?</a></h4>
											<input type="submit" value="SIGNIN"/>
											<h3 style=" font-size: 13px;margin-left: 279px;">New User <a class="color4" href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal5"> CLICK HERE </a></h3>
										</form>
									</div>								
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->
		<script src="js/bootstrap.js"></script>
		<?php
				if(isset($_POST["submit"]))
				{
					$con=mysqli_connect("localhost","root","","QuickFurni");
					$mail=$_POST["txtEmail"];
					$password=$_POST["txtPassword"];

					$statement=mysqli_prepare($con,"SELECT email,password FROM tbluser WHERE email=? AND password=?");
					mysqli_stmt_bind_param($statement,"ss",$mail,$password);
					mysqli_stmt_store_result($statement);
					if(mysqli_stmt_bind_result($statement,$mail,$password)>0){
						session_start();
						$_SESSION['mail']=$mail;
						header('location:single.php?p_id=$pid');
					}else{
						echo "".'<span id="error">***Invalid file Size or Type***</span><br/><br/';
					}
					mysqli_stmt_close($statement);
					mysqli_close($con);
				}
	?>

</body>
</html>
			