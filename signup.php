<?php
$server_name="localhost";
$username="root";
$password="";

$conn = mysqli_connect($server_name, $username, $password);
mysqli_select_db($conn, "plant");

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}else{
    echo "Connected Successfully";
}
	// Check if the user has submitted the sign up form
	if(isset($_POST['username'])  && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
        $sql="INSERT INTO `user` (`name`, `password`) VALUES ('$username', '$password')";

        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        
		// TODO: Implement validation and sanitization for input data
		// Validate the input data to ensure it meets your requirements
		
		// TODO: Implement secure password hashing and database storage
		// Hash the password and store the user's data in the database
		
		// Redirect the user to a thank-you page
		header('Location: thankyou.php');
		exit();
	}
?>
