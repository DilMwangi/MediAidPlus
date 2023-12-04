<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message



if (isset($_POST['submit'])) {
	require 'connection.php';
	$conn = Connect();

	$username=$conn->real_escape_string($_POST['username']);
	$password=$conn->real_escape_string($_POST['password']);

	$query = $conn->query("SELECT username, password FROM CUSTOMER WHERE username='$username'");
	$data = $query->fetch_array();
	if (password_verify($password, $data['password'])){
		$_SESSION['login_user2']=$username; // Initializing Session
		header("location: medicalsupplieslist.php");
	}
	else {
		$error = "Username or Password is invalid";
		}
		mysqli_close($conn); // Closing Connection
}




// if (empty($_POST['username']) || empty($_POST['password'])) {
// $error = "Username or Password is invalid";
// }
// else
// {
// // Define $username and $password


// // Establishing Connection with Server by passing server_name, user_id and password as a parameter


// // SQL query to fetch information of registerd users and finds user match.
// $query = "SELECT username, password FROM CUSTOMER WHERE username=? AND password=?";


// // To protect MySQL injection for Security purpose
// $stmt = $conn->prepare($query);
// $stmt -> bind_param("ss", $username, $password);
// $stmt -> execute(array($username, $password));
// $row_count = $stmt->rowCount();

// if ( !empty($query->num_rows) && $query->num_rows >0){
// 	$data = $query->fetch();
// 	if (password_verify($password, $data['password'])){
// 		$_SESSION['login_user2']=$username; // Initializing Session
// 		header("location: medicalsupplieslist.php");
// 	}
	
// }

// // $result = $stmt->fetch();

// // if(is_array($result)){
// // 	if(password_verify($password, $result['password'])) {

// // 		$_SESSION['login_user2']=$username; // Initializing Session
// // 		header("location: medicalsupplieslist.php"); // Redirecting To Other Page
// // 	} 
// // }
// }
?>