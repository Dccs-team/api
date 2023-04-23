<?php
// Set the text to be translated and the target language
$text = $_GET["text"];
$targetLang = $_GET["lan"];

// Set the URL and parameters for the Google Translate API
$url = "https://translate.google.com/translate_a/single";
$params = array(
    "client" => "gtx",
    "sl" => "auto",
    "tl" => $targetLang,
    "dt" => "t",
    "q" => $text
);
$url = $url . "?" . http_build_query($params);

// Send a GET request to the API and get the response
$response = file_get_contents($url);

// Parse the JSON response to get the translated text
$decoded = json_decode($response, true);
$translation = $decoded[0][0][0];

// Output the translated text
echo $translation;
?>
	
