<?php
$i=1;
while( $i <= 10 ) {      
$j = 1;    
echo "<table><tr>";   
while( $j <= 10 ) {    
echo "<td>"."$i".'*'."$j"."</td>";      
echo "<td>".($i*$j)."</td>";        
  $j++; 
echo "</tr>";
}       
  if ($i != 10) ;       
  $i++;    
}   
  echo "<table><tr>";

?>