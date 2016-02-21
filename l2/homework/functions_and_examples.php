<?php
//$handle = fopen("http://test1.ru/php/l2/some.php", "w"); //відкриває файл або URL


/*
// отримує вміст файла в стрічку
$filename = "C:\Users\User\Desktop\v.txt";
$handle = fopen($filename, "rb");
$contents = fread($handle, filesize($filename)); //читає файл
fclose($handle);*/


/*
$filename = 'test.txt';
$somecontent = "Add this to the file\n";

// переконуємося, що файл існує і доступний для запису
if (is_writable($filename)) {

    // відкриваємо $filename в режимі "дописати в кінець".
    // Таким чином, зміщення встановлено в кінець файлу і
    // $somecontent пишеться в кінець при використанні fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "I can not open the file ($filename)";
         exit;
    }

    // записуємо $somecontent в наш відкритий файл
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "I can not write to the file ($filename)";
        exit;
    }
    
    echo "Recorded ($somecontent) in file ($filename)";
    
    fclose($handle); //закриває файл

} else {
    echo "File $filename not writable";
}
*/

$filename = "text.txt";
$data = "1\n";
if ( is_writeable($filename) ) {
$openData = fopen($filename, "r+");
fwrite($openData, $data);
//fputs($openData, $data);
fclose($openData); 
} else {
echo "Could not open Sfilename for writing";
}

echo rand() . "\n"; // випадкова генерація чисел
echo rand() . "\n";
echo rand(5, 15);
echo "<br>";
echo "<br>";


// string serialize (mixed value);//возвращает строку с байтово-поточным представлением значения value, которое может храниться где угодно.
//mixed unserialize (string str);// створює PHP значення з збереженого представлення, повертає значення яке може бути integer, float, string, array або object



//string strip_tags ( string str [, string allowable_tags] ); функція повертає рядок str, з якої вилучені HTML і PHP теги

$text = '
<p>Paragraph.</p>
<!-- Comment -->
some text';

echo strip_tags($text);

echo "\n\n-------\n";

// не удалять <p>
echo strip_tags($text, '<p>');
echo "<br>";
echo "<br>";

//string htmlspecialchars ( string string [, int quote_style [, string charset]] ) //Перетворює спеціальні символи в HTML сутності
/*
Производятся следующие преобразования: 
 '&' (амперсанд) преобразуется в '&amp;' 
 '"' (двойная кавычка) преобразуется в '&quot;' when ENT_NOQUOTES is not set. 
 ''' (одиночная кавычка) преобразуется в '&#039;' только в режиме ENT_QUOTES. 
 '<' (знак "меньше чем") преобразуется в '&lt;' 
 '>' (знак "больше чем") преобразуется в '&gt;'*/
 $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

?>