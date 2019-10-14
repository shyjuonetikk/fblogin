<?php

	session_start();
	require 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([
	  'app_id' => '510749116427614', // Replace {app-id} with your app id
	  'app_secret' => '308009010bfa314e2ce22bef5516a86b',
	  'default_graph_version' => 'v3.2',
	  ]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://dev.kazadee.tech/facebooklogin/fb-callback.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook Login</title>
</head>
<body>

</body>
</html>