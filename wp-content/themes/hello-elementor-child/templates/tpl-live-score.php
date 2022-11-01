<?php
/* Template Name: Live score Template */
get_header();

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/matches/v1/upcoming",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: cf0cbdee9dmsh8199f9c9e6db094p14ce7bjsn2322d4c02d70"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;
    $jsonObj = json_decode($response,true);
    $newestScoreFirst = array_reverse($jsonObj);
    foreach($newestScoreFirst as $key => $value){
        echo $key . "\n";
        foreach ($value as $sub_key => $sub_val) {
            if (is_array($sub_val)) {
                echo $sub_key . " : \n";
                foreach ($sub_val as $k => $v) {
                    echo "\t" .$k . " = " . $v . "\n";
                }
            } else {
                echo $sub_key . " = " . $sub_val . "\n";
            }
        }
          echo '<pre>';
          //print_r($showData);
          echo '</pre>';
      }
}
/*$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://livescore6.p.rapidapi.com/matches/v2/list-live?Category=cricket",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: livescore6.p.rapidapi.com",
		"X-RapidAPI-Key: cf0cbdee9dmsh8199f9c9e6db094p14ce7bjsn2322d4c02d70"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;
    $jsonObj = json_decode($response,true);
    $newestScoreFirst = array_reverse($jsonObj);
    //print_r($jsonObj);
    foreach($newestScoreFirst as $data){
        echo '<h1>Hello</h1>';
        print_r($data);

    }
    foreach($newestScoreFirst as $row => $innerArray){
        foreach($innerArray as $innerRow => $value){
          //print_r($value);
          print($value['Snm']);
        }
      }
      foreach($newestScoreFirst as $row => $value){
        foreach($value as $row2 => $value2)
            //echo $value2 . "<br/>";
            print($value['Snm']);
    }
}*/
get_footer();
?>
  