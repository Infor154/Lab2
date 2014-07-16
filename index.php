<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<?php
			ini_set('display_errors', 1);
			require_once('TwitterAPIExchange.php');

			/** Set access tokens hre - see: https://dev.twitter.com/apps/ **/
			$settings = array(
			'oauth_access_token' => "2596998254-wXabtqfbeTcWPTNn7NHQ4HQ5k0fZ6GSG8dVPMlD",
			'oauth_access_token_secret' => "oRA3newir86bo9i4jzp5H7aZhYDv3XxHmxGGq9MG1isZS",
			'consumer_key' => "9Rx35XKEDIWGYhiWIEOUx14m8",
			'consumer_secret' => "LPDG2JDUg9kVP9M2YV4mwKFqpl8K1XoXAYH2i1P1ymetPjJFmp"
		);
		
		/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
		$url = 'https://api.twitter.com/1.1/search/tweets.json';
		$requestMethod = 'POST';
		
		?>
		
		
		
		<h1>Enter a keyword to search!</h1>
		<form action="controller.php" method="POST">
			<input type="text" name="keyword" size="50" value=''/>
			<input type="submit" name="Search" value="Search Twitter"/>
		</form>
		
	</body>
	
</html>
