<?php 
if (isset($_POST['password'])) {
	include '../connect.php';
	$id = $_POST['session_id'];
	// $p = md5($_POST['password']);
	$p = $_POST['password'];
	// if ($id =='' || $p =='') echo "fields empty"; return;
	$conn = con_to_db();
	$sql = "UPDATE admin SET password = ? WHERE admin_id = ?";
	$query = $conn->prepare($sql);
	$query->execute(array($p,$id));
	echo $query->rowCount() > 0 ? 1: 0;
}
?>