<?php
    $filename = "count.txt";
    $fd = fopen( $filename,"r" );
    $cont = fread( $fd, filesize( $filename ) );
    fclose( $fd );
    $cont=$cont+1;
    $fd = fopen( $filename,"w" );
    fwrite($fd, $cont);
    fclose( $fd );
    echo "Лічильник відвідувань: \n";
    echo $cont;
?>