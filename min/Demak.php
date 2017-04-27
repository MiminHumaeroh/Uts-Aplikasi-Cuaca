<div align='center'>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/4fcc4b5d8690278a/conditions/forecast/q/IA/Demak.json");
  $parsed_json = json_decode($json_string);
  $weather = $parsed_json->{'current_observation'}->{'weather'};
  $f = $parsed_json->{'current_observation'}->{'temp_f'};
  $c = $parsed_json->{'current_observation'}->{'temp_c'};
  $lc = $parsed_json->{'current_observation'}->{'local_time_rfc822'};

//Jam  
  $jam = $parsed_json->forecast->txt_forecast->date;
  
  
//  tgl hari
  $day = $parsed_json->forecast->simpleforecast->forecastday[0]->date->day;
  $day1 = $parsed_json->forecast->simpleforecast->forecastday[1]->date->day;
  $day2 = $parsed_json->forecast->simpleforecast->forecastday[2]->date->day;
  $day3 = $parsed_json->forecast->simpleforecast->forecastday[3]->date->day;
 
// Bulan 
  $month = $parsed_json->forecast->simpleforecast->forecastday[0]->date->monthname;
  $month1 = $parsed_json->forecast->simpleforecast->forecastday[1]->date->monthname;
  
// Tahun  
  $year = $parsed_json->forecast->simpleforecast->forecastday[0]->date->year;
  
 // gbr 
  $icon   = $parsed_json->{'forecast'}->{"simpleforecast"}->forecastday[0]->{"icon"};
  
 //hari 
  $dino = $parsed_json->forecast->txt_forecast->forecastday[0]->{"title"};
  $dino1 = $parsed_json->forecast->txt_forecast->forecastday[2]->{"title"};
  $dino2 = $parsed_json->forecast->txt_forecast->forecastday[4]->{"title"};
  $dino3 = $parsed_json->forecast->txt_forecast->forecastday[6]->{"title"};

  
  echo"Perkiraan cuaca 3 hari kedepan di Bogor
  <br>
  <br>";
  echo " 
  Cuaca saat ini di Demak hari ${dino} ${day} ${month} ${year} jam ${jam} adalah ${weather}<br>
  dengan suhu sekitar ${f}<sup>o</sup> Fahrenheit dan ${c}<sup>o</sup> Celcius<br>
  <br><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br>";
  
    echo " 
  Cuaca saat ini di Demak hari ${dino1} ${day1} ${month} ${year} jam ${jam} adalah ${weather}<br>
  dengan suhu sekitar ${f}<sup>o</sup> Fahrenheit dan ${c}<sup>o</sup> Celcius<br>
  <br><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br>";
  
    echo " 
  Cuaca saat ini di Demak hari ${dino2} ${day2} ${month} ${year} jam ${jam} adalah ${weather}<br>
  dengan suhu sekitar ${f}<sup>o</sup> Fahrenheit dan ${c}<sup>o</sup> Celcius<br>
  <br><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br>";
  
    echo " 
  Cuaca saat ini di Demak hari ${dino3} ${day3} ${month} ${year} jam ${jam} adalah ${weather}<br>
  dengan suhu sekitar ${f}<sup>o</sup> Fahrenheit dan ${c}<sup>o</sup> Celcius<br>
  <br><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br>";
?>
</div>