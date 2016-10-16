#!/usr/bin/php -q
<?php
  $api_key = file_get_contents("api_url");
  $api_key = str_replace("\n", '', $api_key);
  
  while(true) {
  	$condition = file_get_contents($api_key); //Fetch condition information
  
  	$fp = fopen("../condition.json" , "w");
  	fputs($fp , $condition);
  	fclose($fp);
    sleep(180);
  }
?>
