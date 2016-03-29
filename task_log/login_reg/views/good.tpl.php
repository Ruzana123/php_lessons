<div class="container">
<?php
if (has_good()) {
        ?><div class="alert alert-success" role="alert"><?php
        foreach ($_SESSION['good'] as $value) {
            echo $value;
            echo "<br>";
        }   
        ?></div><?php
        unset($_SESSION['good']);
    }  
?>
</div>