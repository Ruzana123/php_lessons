<?php
function divide( $a, $b ) {
​
        if( $b == 0 ) {
            throw new Exception('Cannot divide by ZERO');
        }
​
        if( $b > 20 ) {
            throw new Exception('Cannot divide by 20+');
        }
​
        $c = $a/$b;
​
        return $c;
    }
    
    try {
​
        echo divide(4, 30);
​
    } catch(Exception $e) {
​
        echo 'Something wrong. Message - ' . $e->getMessage();
    }
    ?>