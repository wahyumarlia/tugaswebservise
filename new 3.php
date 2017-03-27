<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/d763f3afeec5c0ed/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $pretty = $parsed_json->{'history'}->{'pretty'};
  $year = $parsed_json->{'history'}->{'year'};
  $mon = $parsed_json->{'history'}->{'mon'};
  
  echo "The pretty is ${pretty} <br>";
  echo "The year is ${year} <br>";
  echo "The mon is  ${mon} <br>";
?>