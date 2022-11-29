<?php
$key = 'ghibFEePTdY5YUWDKsF1IgKnkkT2wwvv';
// print_r();exit;
header('Content-type: application/json');



$ch = curl_init("http://dataservice.accuweather.com/locations/v1/cities/autocomplete?apikey=".$key."&q=".$_POST['term']);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
                                                              
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      

$result = curl_exec($ch);
echo $result;
?>