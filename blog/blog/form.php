
<?php
	include "header.php";
?>

<!-- product-base -->
<div class="container">
	<div class="row content-blog">
		<div class="comments" id="form-comment">
				<div class="by-element">
					<h2>Adding data</h2>
				</div>
				<form role="form" action="" method="post">
					<div class="form-group">
						<div class="middle-group form-3">
							<label class="form-label star">Title</label>
							<input type="text" name="title" class="form-control">
						
						</div>
						<div class="middle-group form-3">
							<label class="form-label star">Images</label>
							<input type="text" name="images" class="form-control">
						</div>
						<div class="middle-group form-3">
							<label class="form-label star">Author</label>
							<input type="text" name="author" class="form-control">
						</div>
						<div class="middle-group">
							<label class="form-label star">Description</label>
							<textarea class="form-control textarea" name="description" rows="3" ></textarea>
						</div>
						<div class="middle-group">
							<label class="form-label star">Paper</label>
							<textarea class="form-control textarea" name="paper" rows="10" ></textarea>
						</div>
						<button type="submit" class="send">Adding data</button>
					</div>
				</form>
				<!-- <form role="form" action="blog-main.php" method="post" style="width:100%;">
					<button type="submit" class="send" style="float:left;">View blog</button>
				</form>	 -->
				<?php 
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$err_message = array();
					if ((empty($_POST['title']))&&
						(empty($_POST['author']))&&
						(!preg_match( "/^.*\.(jpg|jpeg|png|gif)$/i", $_POST['Images']))&&
						(empty($_POST['description']))&&
						(empty($_POST['paper']))){
						array_push($err_message, 'Введіть дані.');
					}
					if (empty($_POST['title'])) {
						array_push($err_message, 'Потрібно ввести вірний заголовок');
					}
					if (empty($_POST['author'])) {
						array_push($err_message, 'Потрібно ввести автора вірно');
					}
					if (!preg_match( "/^.*\.(jpg|jpeg|png|gif)$/i", $_POST['images'])) {
						array_push($err_message, 'Введіть шлях до картинки');
					}
					if (empty($_POST['description'])) {
						array_push($err_message, 'Введіть короткий опис');
					}
					if (empty($_POST['paper'])) {
						array_push($err_message, 'Введіть статтю');
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
					if ($n==0) {
						try { 
					        $stmt = $conn->prepare("INSERT INTO `post` (`Images`, `Title`, `Author`, `Description`, `Paper`,`Date`) 
					        VALUES (:images, :title, :author, :description, :paper, :datee)"); 
					        $stmt->bindParam(':images', $images); 
					        $stmt->bindParam(':title', $title); 
					        $stmt->bindParam(':author', $author); 
					        $stmt->bindParam(':description', $description); 
					        $stmt->bindParam(':paper', $paper); 
					        $stmt->bindParam(':datee', $date); 
					        // insert a row 
					        $images = htmlspecialchars($_POST['images']); 
					        $title = htmlspecialchars($_POST['title']);
					        $author = htmlspecialchars($_POST['author']);
					        $description = htmlspecialchars($_POST['description']);
					        $paper = htmlspecialchars($_POST['paper']);
					        $date = date("d F Y");
					        $stmt->execute(); 
					    } 
					    catch(PDOException $e) { 
					        echo "Error: " . $e->getMessage(); 
					    }
						$s='Данні успішно додані '. date("d F Y");
					}
					if (!empty($s)){
						?><div class="alert alert-success" role="alert">
						<?php echo $s?></div>
					</div><?php
					}
				?>				
				<?php
			}
			?>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>