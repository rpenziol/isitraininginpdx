#!/usr/bin/php -q
<?php
  $api_key = file_get_contents("api_url");
  $api_key = str_replace("\n", '', $api_key);
  $json_string = file_get_contents($api_key);
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $condition = $parsed_json->{'current_observation'}->{'weather'};
  echo "${condition}";
?>
