<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST") {
		// Collect data from the POST variables
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email']; // Add this line to collect email
	
		if(!empty($user_name) && !empty($password) && !empty($email)) {
			if (strpos($email, "@") === false) {
				echo "<p style='color:red;'>Please enter a real email address</p>";
			} else {
				// Generate a unique user_id
				$user_id = random_num(20);
				
				// Save to the database
				$query = "INSERT INTO users (user_id, user_name, password, email) VALUES ('$user_id', '$user_name', '$password', '$email')";
				mysqli_query($con, $query);
				
				// Redirect to the login page after successful signup
				header("Location: login.php");
				die();
			}
		} else {
			echo "<p style='color:red;'>Please enter some valid information!</p>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-image: url('https://raw.githubusercontent.com/TanNatTan/TansPublicProjects.io/main/SA1Main/Mountains_Background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

	<style type="text/css">

	*{
    	margin: 0;
    	padding: 0;
    	--color-primary: #545454;
    	--color-primary-dark: #1B1B1B;
    	--color-secondary: #969696;
    	--color-secondary-light:#e7e7e7;
    	--color-prime-light: #ffffff;
    	--color-prime-dark: #000000;
    	list-style: none;
    	box-sizing: border-box;
	}
	
	#text{
		display: block;
        width: 100%;
        padding: 0.75rem;
        box-sizing: border-box;
        border-radius: var(--border-radius);
		border: 1px solid var(--color-secondary-light);
        outline: none;
        background: var(--color-prime-light);
        transition: background 0.2s, border-color 0.2s;
    }

	#text:focus{
		border-color: var(--color-primary);
    	background: var(--color-prime-light);
	}

	#button {
    	padding: 10px;
    	width: 100px;
    	color: white;
    	background-color: var(--color-primary);
    	border: none;
    	transition: background-color 0.3s;
	}

	#button:hover {
    	background-color: var(--color-primary-dark);
	}

	#box{
		width: 400px;
    	max-width: 400px;
    	margin: auto;
    	padding: 2rem;
		margin-top: 50px;
    	box-shadow: 0 0 40px #191919;
    	border-radius: var(--border-radius);
    	background: #e7e7e7;
	}

	#button {
        padding: 10px;
        width: 100px;
        color: white;
        background-color: var(--color-primary);
        border: none;
    }

	.error-message {
    color: red;
}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: var(--color-primary-dark); font-family:Arial; text-align:center; font-weight:600;">Signup</div>

			<input id="text" class="form__input" type="text" name="user_name" autofocus placeholder="Username"> <br><br>
			<input id="text" class="form__input" type="password" name="password" autofocus placeholder="Password"><br><br>
			<input id="text" class="form__input" type="email" name="email" autofocus placeholder="Email address"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" style="text-decoration: none; color: var(--color-secondary); transition: 0.3s; text-align:center;">Already have an account? Sign in</a><br><br>
		</form>
	</div>
</body>
</html>