<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/d763f3afeec5c0ed/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $age = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $illuminated = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  $sunset_h = $parsed_json->{'moon_phase'}->{'sunset'}->{'hour'};
  $sunset_m = $parsed_json->{'moon_phase'}->{'sunset'}->{'minute'};
  
  echo "The Age of Moon is ${age} <br>";
  echo "The percentIlluminated is ${illuminated} <br>";
  echo "The sunset is hour ${sunset_h}, minute ${sunset_m} <br>";
?>