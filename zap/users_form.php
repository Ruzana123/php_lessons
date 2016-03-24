<?php include "header.php"; ?>
<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="by-element">
				<h2>Registration</h2>
			</div>
			<?php if (!is_logged_in()){ ?>
			<form class="registration-form" role="form" action="" method="POST">
			  	<div class="middle-group reg" style="texr-align:center">
				    <label for="nick" class="form-label star">Nick</label>
				    <input type="text" name="nick" class="form-control">
			  	</div>
			  	<div class="middle-group reg">
					<label for="email" class="form-label star">Email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="middle-group reg">
					<label for="password" class="form-label star">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="middle-group reg">
					<label for="password2" class="form-label star">Confirm password</label>
					<input type="password" name="password2" class="form-control">
				</div>
			  <button type="submit" class="send reg-btn">Registration</button>
			</form>
			<?php } 
			else echo "To register, leave the current account";?>
		</div>
	</div>
</div>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$err_message1 = array();
	$email=htmlspecialchars($_POST['email']);
	$pas=htmlspecialchars($_POST['password']);
	$nick=htmlspecialchars($_POST['nick']);
	
	if ($_POST['password']!=$_POST['password2']){
		array_push($err_message1, 'Введені паролі не співпадають');
	}
	if (empty($_POST['nick'])){
		array_push($err_message1, 'Введіть нік');
	}
	if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
		array_push($err_message1, 'Email введено не вірно');
	}
	if (empty($_POST['email'])){
		array_push($err_message1, 'Введіть email');
	}
	if (empty($_POST['password'])){
		array_push($err_message1, 'Введiть паролі');
	}

	$n=count($err_message1);
	if ($n!=0) {
		?><div class="alert alert-danger" role="alert"><?php
		foreach ($err_message1 as $value) {
			echo $value;
			echo "<br>";
		}	
		?></div><?php					
	}
	if ($n==0) {
        try {
        	$err_message = array(); 
			$stmt = $conn -> prepare("SELECT * FROM `users` WHERE `nick` = :nick OR `email` = :email");
			$stmt->bindParam(':nick', $nick); 
		    $stmt->bindParam(':email', $email); 
		    $nick = htmlspecialchars($_POST['nick']); 
			$email = htmlspecialchars($_POST['email']);
			$stmt -> execute();
            $users = $stmt->fetch();
            if ($users['nick']==$nick) {
            	array_push($err_message, 'Користувач з таким ніком вже існує');
            }
            if ($users['email']==$email) {
            	array_push($err_message, 'Користувач з таким email вже існує');
            }
            $err=count($err_message);
        	if ($err!=0) {
				?><div class="alert alert-danger" role="alert"><?php
				foreach ($err_message as $value) {
					echo $value;
					echo "<br>";
				}	
				?></div><?php					
			}
            if ($err==0){
            	try { 
			        $stmt = $conn->prepare("INSERT INTO `users` (`nick`, `email`, `password`) 
			        VALUES (:nick, :email, :password)"); 
			        $stmt->bindParam(':nick', $nick); 
		    		$stmt->bindParam(':email', $email); 
			        $stmt->bindParam(':password', $password);
			        // insert a row 	
			        $nick = htmlspecialchars($_POST['nick']); 
					$email = htmlspecialchars($_POST['email']);
					$password= htmlspecialchars($_POST['password']);	        
			        if ( $stmt -> execute() == true ) {
			        	$s = "<span> Ви створили користувача </span>";
		        	} 
			    } 
			    catch(PDOException $e) { 
			        echo "Error: " . $e->getMessage(); 
			    }
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
	}
	if (!empty($s)){
		?><div class="alert alert-success" role="alert">
		<?php echo $s?></div>
	</div><?php
	}
}
include "footer.php"; 				
?>