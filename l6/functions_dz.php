<?php
function rz_valid_email($str){
    if(preg_match("([a-zA-Z0-9_\-\.]+\@[a-z0-9\.\-]+)", $str)){ 
        echo 'Вірно'; 
    }else{ 
        echo 'Невірно'; 
    }
}

function rz_valid_url($str){
 if(preg_match('(^http[s]?\\:\\/\\/[a-z0-9\-]+\.([a-z0-9\-]+\.)?[a-z]+)i',$str)){
  		echo 'Вірно'; 
    }else{ 
        echo 'Невірно'; 
    }
}

function rz_valid_phone($str){
 if(preg_match('/[+][3][(][0-9]{4}[)][0-9]{2}[-][0-9]{2}[-][0-9]{3}/',$str)){ //+3(8093)81-65-101
  		echo 'Вірно'; 
    }else{ 
        echo 'Невірно'; 
    }
}

?>