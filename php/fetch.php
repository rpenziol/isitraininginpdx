#!/usr/bin/php -q
<?php
  $api_key = file_get_contents("api_url");
  $api_key = str_replace("\n", '', $api_key);
  
  while(true) {
  	$json_string = file_get_contents($api_key); //Fetch condition information
  	$parsed_json = json_decode($json_string);
  	$location = $parsed_json->{'location'}->{'city'};
  	$condition = $parsed_json->{'current_observation'}->{'weather'};
  
  	$fp = fopen("current_condition.txt" , "w");
  	fputs($fp , $condition);
  	fclose($fp);
        sleep(180);
  }
?>
