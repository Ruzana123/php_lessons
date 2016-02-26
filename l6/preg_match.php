<pre>
<?php
//preg_match — Выполняет проверку на соответствие регулярному выражению

//Поиск подстроки "php" в тексте
// Символ "i" после закрывающего ограничителя шаблона означает
// регистронезависимый поиск.
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "Вхождение найдено.<br>";
} else {
    echo "Вхождение не найдено.<br>";
}

/* Специальная последовательность \b в шаблоне означает границу слова,
 *  следовательно, только изолированное вхождение слова 'web' будет
   соответствовать маске, в отличие от "webbing" или "cobweb" */
if (preg_match("/\bweb\b/i", "PHP is the web scripting language of choice.")) {
    echo "Вхождение найдено.<br>";
} else {
    echo "Вхождение не найдено.<br>";
}

if (preg_match("/\bweb\b/i", "PHP is the website scripting language of choice.")) {
    echo "Вхождение найдено.<br>";
} else {
    echo "Вхождение не найдено.<br>";
}


// Извлекаем имя хоста из URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

// извлекаем две последние части имени хоста
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "доменное имя: {$matches[0]}\n";
echo "<br>";
//Для електронної пошти:
//[a-zA-Z0-9_\-\.]+\@[a-z0-9\.\-]+



//preg_replace -- Выполняет поиск и замену по регулярному выражению
//mixed preg_replace ( mixed pattern, mixed replacement, mixed subject [, int limit] )
$string = "April 15, 2003";
$pattern = "/(\w+) (\d+), (\d+)/i";
$replacement = "\${1}1,\$3";
echo preg_replace($pattern, $replacement, $string);
echo "<br>";


//preg_match_all -- Выполняет глобальный поиск шаблона в строке
//int preg_match_all ( string pattern, string subject, array &matches [, int flags [, int offset]] )
preg_match_all("|<[^>]+>(.*)</[^>]+>|U", 
    "<b>example: </b><div align=left>this is a test</div>", 
    $out, PREG_PATTERN_ORDER);
echo $out[0][0] . ", " . $out[0][1] . "\n";
echo $out[1][0] . ", " . $out[1][1] . "\n";
echo "<br>";

//preg_filter — Производит поиск и замену по регулярному выражению

$subject = array('1', 'а', '2', 'б', '3', 'А', 'Б', '4'); 
$pattern = array('/\d/', '/[а-я]/', '/[1а]/'); 
$replace = array('А:$0', 'Б:$0', 'В:$0'); 

echo "preg_filter возвращает\n";
print_r(preg_filter($pattern, $replace, $subject)); 

echo "preg_replace возвращает\n";
print_r(preg_replace($pattern, $replace, $subject)); 
?>
</pre>
