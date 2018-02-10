<?php
if (isset($_POST['admin_username']) && isset($_POST['adminPass'])) {
		include ('connect.php');
	// $password = md5($_POST['adminPass']);
	$password = $_POST['adminPass'];
	$login = new login;
	$login ->name = $_POST['admin_username'];
	$login ->pass = $_POST['adminPass'];
	$login ->sql = "SELECT admin_id FROM admin WHERE admin_username = ? AND password = ?";
	$excute = $login->query('id','admin_id');
	echo $excute == true ? 1: 0;
}

if (isset($_POST['deptName']) && isset($_POST['deptPass'])) {
		include ('connect.php');
		$username = $_POST['deptName'];
		// $password = md5($_POST['deptPass']);
		$password = $_POST['deptPass'];
		// $login = new login;
		// 	$login ->name = $_POST['deptName'];
		// 	$login ->pass = $_POST['deptPass'];
		// 	$login ->sql = "SELECT designee_id FROM designee WHERE password = ? AND username = ?";
		// 	$excute = $login->query('id','designee_id');
		// 	if($excute == true){
		// 		echo 1;
		// 	}else echo 0;
		$conn = con_to_db();
		$sql = "SELECT designee_id FROM designee WHERE password = ? AND username = ?";
		$query = $conn->prepare($sql);
		$query->execute(array($password,$username));
		$row = $query->fetch();
		$count = $query->rowCount();
		$conn = null;
		if ($count > 0){
			session_start();
			$_SESSION['id'] = $row['designee_id'];
			echo 1;
		}else{
			echo 0;
		}	
}

if (isset($_POST['teacherId']) && isset($_POST['TeacherPass'])) {
			include ('connect.php');
			$login = new login;
			$login ->name = $_POST['teacherId'];
			$login ->pass = md5($_POST['TeacherPass']);
			$login ->sql = "SELECT id FROM faculty WHERE faculty_id = ? AND password = ?";
			$excute = $login->query('id','id');
			echo $excute == true ? 1: 0;
}
/**
* 
*/
class login
{
	public $name = '';
	public $pass = '';
	public $sql = '';
	// public $session_item = '';
	public function query($session_var,$field){
		$name = $this->name;
		$pass = $this->pass;
		$conn = con_to_db();
		$sql = $this->sql;
		$query = $conn->prepare($sql);
		$query->execute(array($name,$pass));
		$row = $query->fetch();
		$count = $query->rowCount();
		$conn = null;
		if ($count > 0){
			session_start();
			$_SESSION[$session_var] = $row[$field];
				return true;
		}else return false;

	}
}
