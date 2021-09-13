<!-- Php Starts here -->

<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
	if(isset($result->lat) && isset($result->lon)){
		$latitude = $result->lat;
		$longitude = $result->lon;
}
}
?>

<!-- php ended -->