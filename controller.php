<?php
require_once('TwitterAPIExchange.php');

include'index.php';

$keyword = $_POST['keyword'];

$plus = '%20';
$keywords = explode(" ",$keyword);
$query = implode($plus,$keywords);
$q = str_replace('','%3A',$query);

$url='https://api.twitter.com/1.1/search/tweets.json' . $q;
$requestMethod = 'POST';

echo'<h3>'.$query.'</h3>';
echo'<h3>URL for the Query</h3>';
echo'<a href='.$url.'>' .$url.'</a>';
echo'<hr>';

$results =@file_get_contents($url,0,null,null);

$tweets = json_decode($result)->results;

?>
