<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email = $_POST["email"];
        $otp = $_POST["otp"];

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
		$sql = "INSERT INTO verification(email,otp) VALUES ('$email','$otp')";

        
		//execute query
		if ($conn->query($sql) === TRUE) {
			$registration_message = "login sucessfull";
			//  // Redirect to the home page
			//  header("Location: index.html");
			//  exit; // Make sure to exit to prevent further execution
		}else {
			$registration_message = "Error: " . $conn->error;
		}
		$conn->close();
	}
		
        ?>