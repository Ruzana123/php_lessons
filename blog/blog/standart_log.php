<?php session_start();
	$servername = "localhost";
    $username = "ruzana";
    $password = "yzrjctyctq";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=form", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully"; 
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    include "function.php";

?>
<!DOCTYPE html>
<html lang="en">
	<!--head-->
	<head>
		<meta charset="UTF-8">
		<title>Form</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body style="background-image: url(images/fon.jpg);">
		<div class="container" style="background-color: rgba(23, 13, 15, 0.4); color:white;">

			<?php
			if(isset($_GET['logout'])) { 
				unset($_SESSION['username']);
			}
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email=$_POST['email'];
		    	$pas=$_POST['password'];
		    	
				if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
					add_errors('Email введено не вірно');
				}
				if (empty($_POST['email'])) {
		            add_errors('Введіть email');
	           	}
	           	if (empty($_POST['password'])) {
	           		add_errors('Введіть пароль');
	           	}
				if ((!empty($_POST['email']))&&(!empty($_POST['password']))) {
			        try {
			        	$stmt = $conn->query("SELECT * FROM `users` WHERE `email`='$email'"); 
			            $user = $stmt->fetch();
			           	if (empty($user['nick'])) {
			           		add_errors('Користувача не виявлено');
			           	}
			           	elseif ($user['password']!=md5($pas)) {
			           		add_errors('Пароль введено невірно');
			           	}
			           	
			        }
			        catch(PDOException $e) {
			            echo "Error: " . $e->getMessage();
			        } 
				}
				if (!has_errors()) {	
					$_SESSION['username'] = $user['nick'];			
				}	
		       	else {
					print_errors();
		        }		        			
			}
				if(!is_logged_in_new()){
					?>
					<form class="registration-form" role="form" action="standart_log.php" method="POST" style="margin-bottom: 20px;">
						<div class="form-group">
							<h1 style="text-align:center;">Login form on website</h1>
							<label for="exampleInputEmail1">Email address</label>
							<input type="text" class="form-control" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>"
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'];?>">
						</div>
							<button type="submit" class="btn btn-default">Submit</button>
					</form>
				<?php
				}
				else{
					echo "<h1> Hello ". get_username() . "</h1><br>";
					?><a href="?logout" style="color:white; text-decoration:none">Logout</a><?php
				}
			?>
		</div>
	<footer>
	</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
<?php ?>