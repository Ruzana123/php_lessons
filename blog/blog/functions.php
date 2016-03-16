
<?php 

$servername = "localhost";
$username = "ruzana";
$password = "yzrjctyctq";

try {
    $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function process_request() {
	$err_message = array();
		if((!preg_match("/^[A-Za-zА-Яа-яЁё0-9\s]+$/", $_POST['Title']))&&(!preg_match("/^[A-Za-zА-Яа-яЁё0-9\s]+$/", $_POST['Author']))&&($_POST['Images']==null)&&($_POST['Description']==null)&&($_POST['Paper']==null)){
			array_push($err_message, 'Введіть дані.');
		}
		if(!preg_match("/^[A-Za-zА-Яа-яЁё0-9\s]+$/", $_POST['Title'])) {
			array_push($err_message, 'Потрібно ввести вірний заголовок');
		}
		if (!preg_match("/^[A-Za-zА-Яа-яЁё0-9\s]+$/", $_POST['Author'])) {
			array_push($err_message, 'Потрібно ввести автора вірно');
		}
		if ($_POST['Images']==null) {
			array_push($err_message, 'Введіть шлях до картинки');
		}
		if ($_POST['Description']==null) {
			array_push($err_message, 'Введіть короткий опис');
		}
		if ($_POST['Paper']==null) {
			array_push($err_message, 'Введіть статтю');
		}
		foreach ($err_message as $value) {
			echo $value;
			echo "<br>";
		}
		$n=count($err_message);
		if ($n==0) {
			try { 
		        $stmt = $conn->prepare("INSERT INTO `post` (`Images`, `Title`, `Author`, `Description`, `Paper`) 
		        VALUES (:Images, :Title, :Author, :Description, :Paper)"); 
		        $stmt->bindParam(':Images', $Images); 
		        $stmt->bindParam(':Title', $Title); 
		        $stmt->bindParam(':Author', $Author); 
		        $stmt->bindParam(':Description', $Description); 
		        $stmt->bindParam(':Paper', $Paper); 
		        // insert a row 
		        $Images = $_POST['Images']; 
		        $Title = $_POST['Title'];
		        $Author = $_POST['Author'];
		        $Description = $_POST['Description'];
		        $Paper = $_POST['Paper'];
		        $stmt->execute(); 
		    } 
		    catch(PDOException $e) { 
		        echo "Error: " . $e->getMessage(); 
		    }
			$s='Данні успішно додані';
			return $s;
		}
}
	
function rz_message(){
	$new_array=rz_mas();
	if (empty($new_array)) {
		echo 'Файл з даними пустий';
	}
	else{
		for ($i=0; $i < count($new_array); $i++) { 
		?>
			<div class="media">
			  	<a class="media-left media-middle" href="#">
			   		<img src="images/<?php echo $new_array[$i]['avatar']; ?>.png" alt="">
			  	</a>
			  	<div class="media-body">
			   	 	<h4 class="media-heading"><?php echo $new_array[$i]['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $new_array[$i]['email'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $new_array[$i]['date'].'&nbsp;'. $new_array[$i]['time'];?></h4>
			    	<p><?php echo strip_tags($new_array[$i]['text']) ?></p>
			  	</div>
			  	<?php
			}
		}
	}
	
?>
