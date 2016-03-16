<?php include "header.php"; ?>
<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="by-element">
				<h2>Enter the site</h2>
			</div>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email=htmlspecialchars($_POST['email']);
		    	$pas=htmlspecialchars($_POST['password']);

				$err_message = array();
		        try {
		        	$stmt = $conn->query("SELECT `nick` FROM `users` WHERE `email`='$email' AND `password`='$pas'"); 
		            $users = $stmt->fetchAll();
		            $user=$users[0][0];
		            /*$stmt = $conn->query("SELECT * FROM `users`"); 
		            $users = $stmt->fetchAll();
		           	foreach ($users as $key => $value) {
		           		if (($value['email'] == $email)&&($value['password'] == $pas)) {
		           			$user=$value['nick'];
		           			$em=$value['email'];
		           			$pass=$value['password'];
		           		}
		           	}*/
		           	if (empty($user)) {
		           		array_push($err_message, 'Користувача не виявлено');
		           	}
		           	/*if (($em!=$email)&&($pass!=$pas)) {
		           		array_push($err_message, 'Користувача не виявлено');
		           	}
		           	if ($em!=$email) {
		           		array_push($err_message, 'email не вірний');
		           	}
		           	if ($pass!=$pas) {
		           		array_push($err_message, 'Нік введено не вірно');
		           	}*/
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
							<input type="password" name="password" class="form-control">
						</div>
					  <button type="submit" class="send reg-btn">OK</button>
					</form>
				<?php
				}
				else{
					get_username();
				}

			?>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>