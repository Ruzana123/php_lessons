<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Hello World</title>
</head>
<body>
<?php 
	new Subscription();
 ?>
​
<?php 
​
	class Subscription {
		public $file_name = 'data.txt';
​
		public function __construct() {
			if( $_POST ) {
				$this->proccess_request();
			}
​
			$this->show_form();
		}
​
		public function proccess_request() {
​
		}
​
		public function get_data() {
​
		}
​
		public function show_form() {
			?>
				<form action="">
					
				</form>
			<?php
		}
	}
​
	$subscriber = new Subscriber();
​
	class Person {
		public $name = '';
		public $surname = '';
		private $card_number = '444-555';
​
		public function __construct( $name, $surname ) {
			$this->name = $name;
			$this->surname = $surname;
		}
​
		public function say_hello() {
			echo 'Hello, world!';
		}
​
		public function say_name() {
			echo 'My name is ' . $this->name;
		}
​
		public function say_credit_number() {
			echo 'Credit number is ' . $this->card_number;
		}
	}
​
	$john = new Person( 'John', 'Doe' );
	$john->say_name();
​
	echo '<br>';
​
	$piter = new Person( 'Piter', 'Parker' );
	$piter->say_name();
​
 ?>
​
</body>
</html>