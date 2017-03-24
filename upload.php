<?php
$con=mysqli_connect("localhost","root","","QuickFurni");

$category=$_POST["optCategory"];
$pname=$_POST["txtPName"];
$subcategory=$_POST["subCategory"];
$desc=$_POST["txtDescription"];
$minPrice=$_POST["txtminPrice"];
$condition=$_POST["optCondition"];
$type=$_POST["opttype"];
$prodAge=$_POST["txtProdAge"];
$prodDate=$_POST["txtDate"];
$city=$_POST["txtCity"];
$zip=$_POST["txtZip"];
$date=new DateTime($prodDate);
$p_date=date_format($date,'Y-m-d');
         $j = 0; //Variable for indexing uploaded image 
            $target_path = "uploads/";//Declaring Path for uploaded images
            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array
                $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
                $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
                $file_extension = end($ext); 
                $target_path1[$i] = $target_path . md5(uniqid(2)) . "." . $ext[count($ext) - 1];
                $j = $j + 1;
                if (($_FILES["file"]["size"][$i] < 1000000) && in_array($file_extension, $validextensions)) {
                    if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path1[$i])) {
                    $target_path = "uploads/";
                            
                } else {
                     header("Location:sell.php?flag=0");
                }
        } 
        else {
                     header("Location:sell.php?flag=2");
        }
             
    } 

    $img1=$target_path1[0];
    $img2=$target_path1[1];
    $img3=$target_path1[2];
    $img4=$target_path1[3];
    $statement=mysqli_prepare($con,"INSERT into product values('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement,"sssssssssssssss",$category,$subcategory,$pname,$desc,$type,$minPrice,$condition,$prodAge,$p_date,$city,$zip,$img1,$img2,$img3,$img4);
    if(mysqli_stmt_execute($statement)>0){
        header("Location:sell.php?flag=1");
    }

?>