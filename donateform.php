<?php
include_once 'database.php';
if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$email=$_POST['email']; 
	$mobile=$_POST['mobile']; 
	$amount=$_POST['amount']; 
	$comment=$_POST['comment'];

	$sql = "INSERT INTO donation_details (name,email,mobile,amount,comment)VALUES('$name','$email','$mobile','$amount','$comment')";
	if (mysqli_query($conn, $sql)){
		
		echo '<script>window.location.href ="https://pages.razorpay.com/pl_IljAyIYroJKWvb/view";</script>';
	}
	else{
		echo "Error:" .$sql ."" .mysqli_error($conn);
	}
}mysqli_close($conn);
?>