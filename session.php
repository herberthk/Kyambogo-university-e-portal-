<?php 
session_start();
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')){ ?>
	<script>
		window.location = 'index.php';
	</script>
	<?php
}
$session_id = $_SESSION['id'];
$conn = con_to_db();
$sql = "SELECT * FROM faculty WHERE id = $session_id ";
$query = $conn->prepare($sql);
$query->execute(array($session_id));
$row = $query->fetch();
// $conn = null;
$name = $row['faculty_Fname']. " " . $row['faculty_Mname']. " " . $row['faculty_Lname'];
$designation = $row['Designation']; 
$pic = $row['faculty_picture'];
$sess_pass = $row['password'];
?>