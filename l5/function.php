<?php

function rz_1z(){ //робота з першою і літерою строки
	$s=strtoupper(substr($_POST['str'],0,1));
	$l=strtoupper(substr($_POST['str'],strlen($_POST['str'])-1,1));
	echo "<b> $s $l <b> ";
};

function rz_valid() {
		
}

function rz_file_htlm(){ //виводить хтмл код вказаної сторінки
	header('Content-type: text/plain'); 

	$url = $_POST['str']; 
	$html_code = file_get_contents($url);  

	echo '<pre>'.$html_code.'</pre>'; 
}


function rz_inverse_tape(){ //повертає строку в оберненому порядку
	$str= $_POST['str'];
	$itog=strrev($str);
	echo $_POST['str'] . ' -> ' . "$itog<br>";
}

function rz_lower_case(){ //перевіряє чи строка в нижньому регістрі

	$s=mb_strtolower($_POST['str']);
	if ($_POST['str']==$s){
		echo 'Строка написана в нижньому регістрі';
	}
	else{
		echo 'Строка написана не в нижньому регістрі. Перепишемо: ' . $s;
	}
}

function rz_palindrome(){ //перевірка чи строка є палідромом (вводити лише літери)
	$str= $_POST['str'];
	$itog=strrev($str);
	if ($str==$itog) {
		echo 'Строка є палідромом';
	}
	else{
		echo 'Введена строка не палідром';
	}
}

function rz_chessboard(){
echo '<table border=1>';
    for($i=1; $i<8; $i++){
        echo '<tr>';
        for($j=1; $j<8; $j++){
        	if (($j+$i)%2==1){
        		echo '<td style="background-color: black; width:30px; height:30px;"></td>';
        	}
        	else{
        		echo '<td style="background-color: white; width:30px; height:30px;"></td>';
        	}
        }
        echo '</tr>';
    }
echo '</table></div>';
}


function rz_valid_email(){
	$email = $_POST['email']; 
    if(preg_match("~([a-zA-Z0-9!#$%&\ '*+-/=?^_`{|}\~])@([a-zA-Z0-9-]).([a-zA-Z0-9]{2,4})~", $email)){ 
        echo 'Верно'; 
    }else{ 
        echo 'Неверно'; 
    }
}


?>