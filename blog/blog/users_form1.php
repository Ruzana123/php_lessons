<?php include "header.php";
?>
<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="by-element">
				<h2>Enter the site</h2>
			</div>
			<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email=$_POST['email'];
		    	$pas=$_POST['password'];

				$err_message = array();
		        try {
		            $stmt = $conn->query("SELECT * FROM `users`"); 
		            $users = $stmt->fetchAll();
		           	foreach ($users as $key => $value) {
		           		if (($value['email'] == $email)&&($value['password'] == $pas)) {
		           			$user=$value['nick'];
		           			$em=$value['email'];
		           			$pass=$value['password'];
		           		}
		           	}
		           	if (($em!=$email)&&($pass!=$pas)) {
		           		array_push($err_message, 'Користувача не виявлено');
		           	}
		           	if (empty($_POST['email'])) {
		           		array_push($err_message, 'Введіть email');
		           	}
		           	if (empty($_POST['password'])) {
		           		array_push($err_message, 'Введіть пароль');
		           	}
		        }
		        catch(PDOException $e) {
		            echo "Error: " . $e->getMessage();
		        } 

		        $n=count($err_message);
				if ($n!=0) {
					?><div class="alert alert-danger" role="alert"><?php
					foreach ($err_message as $value) {
						echo $value;
						echo "<br>";
					}	
					?></div><?php					
				}	

		        if ($n==0){
		        	$_SESSION['username'] = $user;
		        }
		        			
			}
				if(!isset($_SESSION['username'])){
					?>
					<form class="registration-form" role="form" action="" method="POST">
					  	<div class="middle-group reg">
							<label for="email" class="form-label star">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="middle-group reg">
							<label for="password" class="form-label star">Password</label>
							<input type="text" name="password" class="form-control">
						</div>
					  <button type="submit" class="send reg-btn">OK</button>
					</form>
				<?php
				}
				else{
					echo 'Hello, '.$_SESSION['username']."<br>";
				}
			?>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>