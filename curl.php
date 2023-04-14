<?php  
  $url = "https://msk.keylines.in/"; 
// create cURL resource  
$ch = curl_init() ;  
  
//set cURL options  
curl_setopt($ch, CURLOPT_URL, $url) ;  
  
//Run cURL (execute http request)   
$res = curl_exec($ch) ;  
  
// close cURL resource  
curl_close($ch) ;  
// print_r($result) ;  
?>  