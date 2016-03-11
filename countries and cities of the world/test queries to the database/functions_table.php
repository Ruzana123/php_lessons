<?php
 function rz_bd_table_h($my_array){
    foreach ($my_array as $key => $my_array_h) {
        echo "<tr class='success'>";
        if ($key<1) {
            foreach ($my_array_h as $key_h => $value_h) {
               if (gettype($key_h) != 'integer') {
                    echo "<th>".$key_h."</th>";  
                }  
            }
        echo "</tr>";
        }
    }
  }

  function rz_bd_table($my_array){
    foreach ($my_array as $key => $cou) {
        echo "<tr class='info'>";
        
        foreach ($cou as $key1 => $value) {
            if (gettype($key1) != 'integer') {
                 echo "<td>".$value."</td>";
            }
        }
        echo "</tr>";    
    }
  }


?>