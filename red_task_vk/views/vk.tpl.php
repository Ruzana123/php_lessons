<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>Аутентификация через ВКонтакте</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<?php 
		$client_id = CLIENT_ID; // ID приложения
	    $client_secret = CLIENT_SERCET; // Защищённый ключ
	    $redirect_uri = REDIRECT_URI; // Адрес сайта
		/*$client_id = '5384665'; // ID приложения
	    $client_secret = 'Zs3mdTvrB4B2FoemXkFl'; // Защищённый ключ
	    $redirect_uri = 'http://student4.e-u.org.ua/task_log/login_reg/index.php?action=vk'; // Адрес сайта*/

	    $url = 'http://oauth.vk.com/authorize';

	    $params = array(
	        'client_id'     => $client_id,
	        'redirect_uri'  => $redirect_uri,
	        'response_type' => 'code'
	    );
				
		if (isset($_GET['code'])) {
		    $result = false;
		    $params = array(
		        'client_id' => $client_id,
		        'client_secret' => $client_secret,
		        'code' => $_GET['code'],
		        'redirect_uri' => $redirect_uri
		    );

		    $token = json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

		    if (isset($token['access_token'])) {
		        $params = array(
		            'uids'         => $token['user_id'],
		            'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
		            'access_token' => $token['access_token']
		        );

		        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
		        if (isset($userInfo['response'][0]['uid'])) {
		            $userInfo = $userInfo['response'][0];
		            $result = true;
		        }
		    }


	   /* if ($result) {
	        echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br />';
	        echo "Имя пользователя: " . $userInfo['first_name'] . '<br />';
	        echo "Ссылка на профиль пользователя: " . $userInfo['screen_name'] . '<br />';
	        echo "Пол пользователя: " . $userInfo['sex'] . '<br />';
	        echo "День Рождения: " . $userInfo['bdate'] . '<br />';
	        echo '<img src="' . $userInfo['photo_big'] . '" />'; echo "<br />";
	    }*/
	    
	    if (vk_zapros($userInfo['first_name'],$userInfo['uid'])==true) {
	    	$_SESSION['username']=$userInfo['first_name'];
	    	$_SESSION['img']=$userInfo['photo_big'];
	    	redirect("welcom");
	    }
	    else{
	    	$_SESSION['username']=$userInfo['first_name'];
	    	$_SESSION['img']=$userInfo['photo_big'];
	    	redirect("welcom");
	    }
	}?>
</body>
</html>