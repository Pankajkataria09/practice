<?php  
require_once "configer.php";

$reg = $_POST['reg'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
	

$sql = "INSERT INTO Form (reg,name,email,password)
VALUES('".$reg."','".$name."','".$email."','".$password."')";
if($conn->query($sql)===TRUE){
	echo "New record created succesfully";
	echo "<a href='formvalid.php'>"."link"."</a>";
}else{
	echo"Error: " .$sql . "<br>" . $conn->error;
}	
echo "print_";
//
//$newsql = "SELECT * FROM Form";
//$result = $conn->query($newsql);
//if($result = mysqli_query($conn,$newsql)){
//	if(mysqli_num_rows($result) > 0){
//		echo '<table class="table table-bordered table-striped">';
//		echo"<thead>";

			
//	}
//}
?>