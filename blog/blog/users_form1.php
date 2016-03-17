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
				if ((!empty($_POST['email']))&&(!empty($_POST['password']))) {
			        try {
			        	$stmt = $conn->query("SELECT * FROM `users` WHERE `email`='$email'"); 
			            $user = $stmt->fetch();
			           	if (empty($user['nick'])) {
			           		array_push($err_message, 'Користувача не виявлено');
			           	}
			           	if ($user['password']!=$pas) {
			           		array_push($err_message, 'Пароль введено невірно');
			           	}
			        }
			        catch(PDOException $e) {
			            echo "Error: " . $e->getMessage();
			        } 
				}
				else {
					if (empty($_POST['email'])) {
		           		array_push($err_message, 'Введіть email');
		           	}
		           	if (empty($_POST['password'])) {
		           		array_push($err_message, 'Введіть пароль');
		           	}
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
		        	$_SESSION['username'] = $user['nick'];
		        }		        			
			}
				if(!is_logged_in()){
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
					echo 'Hello '. get_username() . "<br>";
				}
			?>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>