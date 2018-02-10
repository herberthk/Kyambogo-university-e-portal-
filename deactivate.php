<?php
if (isset($_POST['haydi'])) {
	include 'connect.php';
$id = $_POST['haydi'];
$conn = con_to_db();
$query = $conn->prepare("UPDATE faculty SET status = ? WHERE id = $id");
	$query->execute(array(1));
	header('location:production/admin1.php');
}