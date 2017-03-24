
<!DOCTYPE php>
<php>
<head>
<title>Sell Your used furnitures here</title>
 <link rel="stylesheet" type="text/css" href="css/image_slieder.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="multiple/script.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery ui/jquery-ui.js"></script>
<link type="text/css" rel="stylesheet" href="js/jquery ui/jquery-ui.css"></link>
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />

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
										<li><a href="products1.php">Chairs</a></li>
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
<div class="hostDiv1">
<div class="hostDiv2" >
	<div class="txtHostForm">
		<div class="txtHost">
			<form enctype="multipart/form-data" action="upload.php" method="post">
				<?php
					if(isset($_GET['flag']))
						if($_GET['flag'] == 1)
						{
					?>	
							<script type="text/javascript">
							$(document).ready(function(){
								$("#successModal").modal({backdrop: 'static',keyboard: false});
							});
							</script>
					<?php
						}else if($_GET['flag'] == 0)
						{
					 ?>
							<script type="text/javascript">
							$(document).ready(function(){
								$("#errorModal").modal({backdrop: 'static',keyboard: false});
							});
							</script>
					 <?php
						}else{?>
							<script type="text/javascript">
							$(document).ready(function(){
								$("#imgErrorModal").modal({backdrop: 'static',keyboard: false});
							});
							</script>
					<?php }

					?>
				<h1 align="center">HOST YOUR PRODUCT </h1>
					<label class="lab">Category:</label>
					<select name="optCategory" id="optCategory">
						<option value="">Select categories</option>
					<?php 
						$con=mysqli_connect("localhost","root","","QuickFurni");
						$sql = "select * from category";
							$res=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($res)) {?>
	    						<option value="<?php echo $row[0];?>"> <?php echo $row[1]; ?> </option>
					
					<?php	}  ?>
					</select>
					<label class="lab">Sub Category:</label>
					<select name="subCategory" id="subCategory">
						<option value="">Select Sub Categories</option>
					</select>
					<script type="text/javascript">
						$(document).ready(function(){
							$('#optCategory').change(function(){
									var cat = $(this).val();
									$.ajax({
										url:"featch.php",
										method:"POSt",
										data:{c_id:cat},
										dataType:"text",

										success:function(data)
										{
											$('#subCategory').html(data);
										}
									});

							});
						});
					</script>
					<label class="lab">Upload Images</label>
					<fieldset>
  						<legend>Images:</legend>
					    <div id="maindiv">
						    <div id="formdiv">
			                    <div id="filediv1" style="width:168%">
			                    	<input name="file[]" type="file" id="file" title="First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB"  multiple required />
			                    </div>
			                    <div id="filediv1" style="width:168%">
			                    	<input name="file[]" type="file" id="file" title="First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB"  required />
			                    </div>
			                    <div id="filediv1" style="width:168%">
			                    	<input name="file[]" type="file" id="file" title="First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB"  required />
			                    </div>
			                    <div id="filediv1" style="width:168%">
			                    	<input name="file[]" type="file" id="file" title="First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 2MB"  required />
			                    </div>
							</div>
        			    </div>
        			  </fieldset>
	               
					<label class="lab">Product Title:</label>
						<input type="text" name="txtPName"  pattern="\D*" maxlength="30" minlength="1" placeholder="Your Product Title" onfocus="this.value = '';" onblur="if (this.value == '')}" required/>
					<label class="lab"> Description :</label>
	                <div class="txtArea">	
	                	<textarea name="txtDescription" style="width: 459px;height: 118px ;" draggable="false" spellcheck="true" placeholder="Enter Product Details" onfocus="this.value = '';" onblur="if (this.value == '')}" rows="4" cols="40" minlength="50" maxlength="300" required ></textarea>	
					</div> 
					<label class="lab">Select Type:</label>
					<select name="opttype">
						<option value="On Sell">On Sell</option>
						<option value="On Bid">On Bid</option>
					</select>
        			<label class="lab">Minimum Expected Price:</label>
        			  	<input type="text" name="txtminPrice" placeholder="Enter Price" maxlength="5" pattern="\d*" onfocus="this.value = '';" onblur="if (this.value == '')}" required/>

        			 <label class="lab">Condition:</label>
                    	<select name="optCondition">
	                        <option selected >Select Condition</option>
							<option value="Brand New" >Brand New</option>
							<option value="Almost Like New">Almost Like New</option>
							<option value="Gently Used">Gently Used</option>
							<option value="Heavily Used">Heavily Used</option>
						</select><br/>
                    <label class="lab">Age:</label>	<br/>									
						<input type="text" name="txtProdAge" placeholder="Give Product Age" value=" "/><br/>

						<label class="lab">Bidding Day:</label>	<br/>
							<input type="text" placeholder="Last Bidding Day" name="txtDate" class="date-picker" value=" ">
							
							<script type="text/javascript">
								$(".date-picker").datepicker({minDate:'0',maxDate: '8'});

								$(".date-picker").mouseover(function(){
										$("#disp").css('display','block');
								});
								$(".date-picker").mouseout(function(){
										$("#disp").css('display','none');
								});
								
							</script>
							<div class="msg alert alert-warning alert-dismissable fade in" id="disp" style=" margin-bottom: -11px;">
								  For how many days to keep your product for <strong>Auction</strong>
							</div>
							<br/>

        			 <label class="lab">City:</label><br/>
                     	<input type="text" name="txtCity" placeholder="Enter City Name" onfocus="this.value = '';" onblur="if (this.value == '')}" required/>	<br/>
                     	
                     <label class="lab">Zip:</label><br/>										
						<input type="text" name="txtZip" placeholder="Enter ZIP Code" pattern="[0-9]{6}" minlength="6" maxlength="6" onfocus="this.value = '';" onblur="if (this.value == '')}" required/>
					 <input type="submit" id="upload" class="upload" value="ADD" >
			
		</div>
		<div class="clearfix"></div>								
	</div>
								
</div>
</div>
<div class="modal fade" id="successModal">
	<div class="modal-dialog" role="document" style="margin-top: 300px;">
		<div class="modal-content modal-info">
			<div class="modal-header">
				<h3 class="text-success" align="center">SuccessFull</h3>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<h4 class="alert alert-success">Your Product is Hosted SuccessFully</h4>
				</div>
				<div class="login-grids">
					<button class="btn btn-danger" style="margin-left: 400px;" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="errorModal">
	<div class="modal-dialog" role="document" style="margin-top: 300px;">
			<div class="modal-content modal-info">
			<div class="modal-header">
				<h3 class="text-danger" align="center">ERROR</h3>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<h4 class="alert alert-danger">Sorry Something Went Wrong..! try again</h4>
				</div>
				<div class="login-grids">
					<button class="btn btn-danger" style="margin-left: 400px;" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="imgErrorModal">
	<div class="modal-dialog" role="document" style="margin-top: 300px;">
			<div class="modal-content modal-info">
			<div class="modal-header">
				<h3 class="text-danger" align="center">ERROR</h3>
			</div>
			<div class="modal-body modal-spa">
				<div class="login-grids">
					<h4 class="alert alert-danger">Image Size or Type is INVALID</h4>
				</div>
				<div class="login-grids">
					<button class="btn btn-danger" style="margin-left: 400px;" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
		<script src="js/bootstrap.js"></script>
</body>
</php>