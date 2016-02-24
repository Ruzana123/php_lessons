<form action='' method='GET'>
    <select name='var' >
		<option  value='Камінь'>Камінь</option>
		<option  value='Ножиці'>Ножиці</option>
		<option value='Бумага'>Бумага</option>
	</select>
 	<input type='submit'/>
</form>

<?php
    $game_array = array(
        'Камінь',
        'Бумага',
        'Ножиці',
    );

    $points = array_flip($game_array); //міняє ключі і елементи масиву місцями

    if(isset($_GET['var'])){
        $el = $game_array[rand(0,count($game_array)-1)];
        echo 'Гравець - '.$_GET['var'].'  Комп*ютер - '.$el.'<br>';
         
        if($points[$el]==0 && $points[$_GET['var']]==2){
            echo 'Переможець: - <b>Комп*ютер</b>!';
        }
         
        elseif($points[$el]==2 && $points[$_GET['var']]==0){
            echo 'Переможець: - <b>Гравець</b>!';
        }
         
        elseif($points[$el]>$points[$_GET['var']]){
            echo 'Переможець: - <b>Комп*ютер</b>!';
        }
        elseif($_GET['var']==$el) echo '<b>Нічия</b>!';
        else echo 'Переможець: - <b>Гравець</b>!';
    }
?>