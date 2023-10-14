<?php
    //     $servername = "localhost";
	// 	$username = "root";
	// 	$password ="" ;
	// 	$dbname ="gym";
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
	// 	if($conn->connect_error){
	// 		die("connection failed: " . $conn->connect_error);
	// 	}

        	// Taking all 6 values from the form data(input)
			if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username = $_POST["username"];
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$gender = $_POST["gender"];
        $email = $_POST["email"];
		$password = $_POST["password"];
		$confirmpassword = $_POST["confirmpassword"];
			
		//validate and sanitize user input
		$username = filter_var($username,FILTER_SANITIZE_STRING);
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);

		//check if password match
		if($password !== $confirmpassword)
		{
			echo "passwords do not match.";
		}else {
			$hashed_password = password_hash($password, PASSWORD_BCRYPT);
       

			$servername = "localhost";
			$username = "root";
			$password ="" ;
			$dbname ="gym";
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		// Check connection
			if($conn->connect_error){
				die("connection failed: " . $conn->connect_error);
			}


    //insert 
		$sql = "INSERT INTO user_data(username,firstname,lastname,gender,email,password) VALUES ('$username','$firstname','$lastname','$gender','$email','$hashed_password')";

		


		//execute query
		if ($conn->query($sql) === TRUE) {
			$registration_message = "Registration sucessfull";
			 // Redirect to the home page
			 header("Location: index.html");
			 exit; // Make sure to exit to prevent further execution
		}else {
			$registration_message = "Error: " . $conn->error;
		}
		$conn->close();
	}
}

?>