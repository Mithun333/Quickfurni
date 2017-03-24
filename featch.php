<?php 
						$sub=$_POST['c_id'];
						$output="";
						$con=mysqli_connect("localhost","root","","QuickFurni");
						echo $sql = "select * from sub_cat where cat_id=$sub";
							$res=mysqli_query($con,$sql);
							while ($row = mysqli_fetch_array($res)) 
							{
	    						
									echo $output = '<option value="'.$row[0].'">'.$row[1].'</option>';
							} 
							
 ?>	