<?php
if (isset($_GET['id'])) {
	include 'connect.php';
	$id = $_GET['id'];
	$conn = con_to_db();
	$sql = "DELETE FROM faculty WHERE id = '$id'";
	$delete = $conn->prepare($sql);
	$delete->execute();
	header('location:production/admin1.php');
}