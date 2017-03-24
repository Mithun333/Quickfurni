<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Mattress A Ecommerce Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
										<p><b><u>Chairs</u></b></p>
										<?php
										mysql_connect('localhost','root','');
										mysql_select_db("quickfurni");
										$query = "select sub_cat_ID,sub_cat_name from sub_cat where cat_id=1";
										$res = mysql_query($query);
										$i=1;
										while($out=mysql_fetch_array($res))
										{
										?>
												<li><a href="products1.php?sub_cat=<?php echo $out[0]?>"><?php echo $out[1]?></a></li>
										<?php
										}
										?>		
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<p><b><u>Beds</u></b></p>
										<?php
										mysql_connect('localhost','root','');
										mysql_select_db("quickfurni");
										$query = "select sub_cat_ID,sub_cat_name from sub_cat where cat_id=2";
										$res = mysql_query($query);
										$i=1;
										while($out=mysql_fetch_array($res))
										{
										?>
												<li><a href="products1.php?sub_cat=<?php echo $out[0]?>"><?php echo $out[1]?></a></li>
										<?php
										}
										?>	
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<p><b><u>Dining Furnitures</u></b></p>
											<?php
										mysql_connect('localhost','root','');
										mysql_select_db("quickfurni");
										$query = "select sub_cat_ID,sub_cat_name from sub_cat where cat_id=3";
										$res = mysql_query($query);
										$i=1;
										while($out=mysql_fetch_array($res))
										{
										?>
												<li><a href="products1.php?sub_cat=<?php echo $out[0]?>"><?php echo $out[1]?></a></li>
										<?php
										}
										?>	
									</ul>	
								</div>												
							</div>
						  </div>
						  <div class="row">
						  		<div class="col1">
									<div class="h_nav">
										<ul>
											<p><b><u>Home Furnitures</u></b></p>
											<?php
											mysql_connect('localhost','root','');
											mysql_select_db("quickfurni");
											$query = "select sub_cat_ID,sub_cat_name from sub_cat where cat_id=7";
											$res = mysql_query($query);
											$i=1;
											while($out=mysql_fetch_array($res))
											{
											?>
													<li><a href="products1.php?sub_cat=<?php echo $out[0]?>"><?php echo $out[1]?></a></li>
											<?php
											}
											?>	
										</ul>	
									</div>							
							</div>
							<div class="col1">
									<div class="h_nav">
										<ul>
											<p><b><u>Sofa & Sitting</u></b></p>
											<?php
											mysql_connect('localhost','root','');
											mysql_select_db("quickfurni");
											$query = "select sub_cat_ID,sub_cat_name from sub_cat where cat_id=4";
											$res = mysql_query($query);
											$i=1;
											while($out=mysql_fetch_array($res))
											{
											?>
													<li><a href="products1.php?sub_cat=<?php echo $out[0]?>"><?php echo $out[1]?></a></li>
											<?php
											}
											?>	
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
<!-- products -->
	<!-- grow -->
	<!-- grow -->
	<div class="pro-du">
		<div class="container" style="margin-top:80px;">
			<div class="col-md-12" style="width: 1368px;
margin-left: -118px; margin-top: -28px;">
						<div class="col-md-3 rsidebar">
							<div class="rsidebar-top">
									<div class="slider-left">
										<h4>Filter By Price</h4>            
										<div class="row row1 scroll-pane">
										<form action="products.php" id="form">
											<label class="checkbox"><input type="checkbox" onchange="$('#form').submit();" checked name="checkbox"><i></i>0 - $100 </label>
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label> 
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label> 
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label> 
											<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label>
										</form>
										</div> 
									</div>
								</div>
								<div class="rsidebar-top chktype">
									<div class="sidebar-row">
						<h4> Category</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Chair<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Smart phones</a></li>										
									<li class="subitem1"><a href="#">Accessories</a></li>										
									<li class="subitem1"><a href="#">Tabs</a></li>										
								</ul>
							</li>
							<li class="item2"><a href="#">Sofa<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Refrigerators </a></li>										
									<li class="subitem1"><a href="#">Washing Machine </a></li>										
									<li class="subitem1"><a href="#">Kitchen Appliances </a></li>										
									<li class="subitem1"><a href="#">Air Conditioner</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Dinner Tables<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#"> Tv & Accessories</a></li>										
									<li class="subitem1"><a href="#">Digital Camera </a></li>										
									<li class="subitem1"><a href="#">Computer</a></li>										
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>
								</div>
						</div>
				
						<div class="col-md-9">
						<?php
								mysql_connect('localhost','root','');
								mysql_select_db("quickfurni");
								$query = "select * from product";
								$res = mysql_query($query);
								$i=1;
								while($out=mysql_fetch_array($res))
								{
									
									$pid=$out[0];
						 ?>
									<div class="col-md-3 pro">
										<div class="product-at ">
											
        									<script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
        											
			                            <a href="single.php?p_id=<?php echo $pid ?>"><img style="height:172px"  class="img-responsive" src="<?php echo $out[13] ?>" alt="">
			                                <div class="pro-grid" style="top: -103px;">
			                                            <a href="single.php?p_id=<?php echo $pid ?>" style="text-decoration: none;"><span class="buy-in">View Details</span></a>
			                                </div>
			                            </a>    
					                    </div>
					                    
					                    <p class="tun"><span style="font-size: 21px; font-family:bold;"><?php echo $out[3]?></span><br><?php echo $out[7] ?><br>Used : <?php echo $out[8]?> Years<br>Type : <span style="color:red"><?php echo $out[5]?></span></p>
					                     <div class="ca-rt">
					                            <a href="cart.php" class="item_add"><p class="number item_price"><i> </i><br>Rs <?php echo $out[6] ?></p></a>                       
					                      </div>
					                    <?php
					                    	if($out[5] == "On Bid")
					                    	{
					                    ?>
					                    <div "style=:margin-left:85px;">
        								<button style="margin-left: 72px;"><p id="future_date<?php echo $i?>" style="color: red; text-align: center; "><?php echo $out[9] ?></p></button>
					                    </div>
					                    <?php
					                    	}
					                    ?>
					                    
					                        <div class="clearfix"></div>
									</div>
							<?php
							$i++;
								}
								$query = "select count(p_id) from product";
								$res = mysql_query($query);
								while($out=mysql_fetch_array($res))
								{
									$count=$out[0];
								}
							 ?>
							 <p id="count" style="display:none;"><?php echo $count ?></p>
						</div>
						<script type="text/javascript">
							$(function(){
								var count= $('#count').text();
								for(var i=1; i<=count;i++){
								var data= $('#future_date'+i).text();
								$('#future_date'+i).countdowntimer({
									dateAndTime : data,
									size : "lg",
									regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})"
									 });
							}
							});
					</script>
			</div>
		</div>
	</div>
<!-- products -->
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
				