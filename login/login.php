<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password))
    {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location:http://localhost/TansPublicProjects.io/login/student_main.php");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
    }
    else
    {
        echo "wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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

	</style>

	<div id="box">
	<form method="post">
            <div style="font-size: 30px; margin: 10px; color: var(--color-primary-dark); font-family: Arial; text-align: center; font-weight: 600;">Login</div>

            <input id="text" class="form__input" type="text" name="user_name" id="user_name" autofocus placeholder="Username or email"> <br><br>
            <input id="text" class="form__input" type="password" name="password" id="password" autofocus placeholder="Password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php" style="text-decoration: none; color: var(--color-secondary); transition: 0.3s; text-align: center;">
                <span>Don't have an account? Create account</span><br><br>
            </a>

        </form>
    </div>
</body>
</html>