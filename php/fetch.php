#!/usr/bin/php
<?php
  $api_url = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . '/api_url');
  $api_url = str_replace("\n", '', $api_url);
  
  $condition = file_get_contents($api_url); //Fetch condition information
  $fp = fopen(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'condition.json' , "w");
  fputs($fp , $condition);
  fclose($fp);
?>
