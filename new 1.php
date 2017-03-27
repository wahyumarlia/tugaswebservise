<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/d763f3afeec5c0ed/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $city = $parsed_json->{'display_location'}->{'city'};
  $zip = $parsed_json->{'display_location'}->{'zip'};
  $state_name = $parsed_json->{'display_location'}->{'state_name'};
  $wmo = $parsed_json->{'display_location'}->{'wmo'};
  
  echo "The city is ${city} <br>";
  echo "The zip is ${zip} <br>";
  echo "The state_name is ${state_name} <br>";
  echo "The wmo ${wmo} <br>";
?>

