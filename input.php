<?php 
	include "config.php";

	$item_id = $_POST['item_id'];
	$item_name = $_POST['item_name'];
	$amount = $_POST['amount'];
	$unit = $_POST['unit'];
	$arrival_date = $_POST['arrival_date'];
	$category = $_POST['category'];
	$item_status = $_POST['item_status'];
	$price = $_POST['price'];

	$query=mysqli_query($conn, "INSERT INTO inventaris VALUES ('$item_id', '$item_name', '$amount', '$unit', '$arrival_date', '$category', '$item_status', '$price')") or die(mysqli_error($conn));
	if($query){
		header("location:inventaris.php");
	}
	else{
		echo "Proses input gagal";
	}
?>