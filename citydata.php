<?php
// history.openweathermap.org/data/2.5/aggregated/year?lat={lat}&lon={lon}&appid={API key}
//default city data if the city details are not available in URL
	$lat=48.8566;
	$lon=2.3522;
$key='40760c2c02f8b85dc323cef1ae6c3757'; //make it from config later
if(isset($_GET['city']) && !empty($_GET['city'])){
	// get lat and lon of the city and assign to below variable
	$lat='';
	$lon='';
}

$url = "http://history.openweathermap.org/data/2.5/aggregated/year?lat=".$lat."&lon=".$lon."&appid=".$key;                                                                      
                                                                   
// $result = curl($url);


/*
	Fetch data from worldbank data
*/
	$country_code = 'in';
if(isset($_GET['country_code']) && !empty($_GET['country_code'])){
	$country_code = 'in';
}
//gdp starts
$url = "http://api.worldbank.org/v2/country/".$country_code."/indicator/NY.GDP.PCAP.PP.CD?format=json";
$world_data = curl($url);
$gdp = 0;
$world_data = json_decode($world_data,1);
if(isset($world_data[1]) && isset($world_data[1][0])){
	$gdp = round($world_data[1][0]['value']);
}
// gdp ends

// tourism data starts
$url = "http://api.worldbank.org/v2/country/".$country_code."/indicator/ST.INT.ARVL?format=json";
$world_data = curl($url);
$tourism = 0;
$world_data = json_decode($world_data,1);
if(isset($world_data[1])){
	foreach($world_data[1] as $key => $value) {
		if(isset($value['value']) && !empty($value['value'])){
			$tourism = $value['value'];
			break;
		}
		

	}
}

// tourism data ends



// curl function for api
function curl($url='')
{
	$ch = curl_init($url);                                                                      
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
	                                                              
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      

	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}
