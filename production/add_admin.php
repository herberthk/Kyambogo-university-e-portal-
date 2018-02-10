<?php
		if (isset($_POST['admin_username'])) {
			include'../connect.php';
			$admin_username = $_POST['admin_username'];
			if (empty($admin_username)) echo "Field required"; return;
			$conn = con_to_db();
			$sql = "INSERT INTO admin(admin_username) VALUES(?)";
			$query = $conn->prepare($sql);
			$query->execute(array($admin_username));
			header('location: admin1.php');
		}