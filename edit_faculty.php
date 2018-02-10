<?php 
if (isset($_POST['facultyId'])) {
	include 'connect.php';
$facultyId = $_POST['facultyId'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contactnumber = $_POST['contactnumber'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$campus = $_POST['campus'];
$id = $_POST['id'];
$conn = con_to_db();
$query = $conn->prepare("UPDATE faculty SET faculty_id = ?, faculty_Fname = ?, faculty_Mname = ?, faculty_Lname = ?, Contact_num = ?, Email = ?, Designation = ?, Department = ?, Campus = ? WHERE id = ?"); 	
$query->execute(array($facultyId,$firstname,$middlename,$lastname,$contactnumber,$email,$designation,$department,$campus,$id));
header('location:production/admin.php');
}