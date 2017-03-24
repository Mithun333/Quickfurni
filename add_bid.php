		<?php
				$amt=$_POST['bid_amt'];
				$pid=$_POST['pid'];
				$date=Date('Y-m-d');
				session_start();
				if(!isset($_SESSION['mail'])) {
					header("Location:single.php?flag=0&p_id=$pid");
				}else
				{
					$con=mysqli_connect("localhost","root","","QuickFurni");
					session_start();
					$email=$_SESSION['mail'];
					mysql_connect('localhost','root','');
					mysql_select_db("quickfurni");
					$query="select user_ID from tbluser where email='$email'";
					$res=mysql_query($query);
					while ($out=mysql_fetch_array($res)) {
						$u_id=$out[0];
					}
					
					

					$statement=mysqli_prepare($con,"INSERT INTO bidder VALUES('',?,?,?,?)");
					mysqli_stmt_bind_param($statement,"ssss",$amt,$date,$pid,$u_id);
					if(mysqli_stmt_execute($statement)>0){
						        header("Location:bidders.php?pid=$pid");
					}
					mysqli_stmt_close($statement);
					mysqli_close($con);
				}
	
	?>
