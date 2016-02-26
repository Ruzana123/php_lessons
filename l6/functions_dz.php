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
 if(preg_match('/^[0-9]{12,12}+$/',$str)){
  		echo 'Вірно'; 
    }else{ 
        echo 'Невірно'; 
    }
}

?>