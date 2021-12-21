<?php
libxml_use_internal_errors(true);
$town = $_GET["town"];
$curl = curl_init("https://www.gismeteo.ua/ua/$town/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($curl);
$dom = new DOMDocument();
$dom->loadHTML($html);
$xpath = new DOMXpath($dom);

$title = $xpath->query("//*[@class='pageinfo_title index-h1']//h1");
$timeRanges = $xpath->query("(//div[@class='widget__row widget__row_time'])[1]//div[@class='w_time']//span");
$temperaturesPerTime = $xpath->query("//*[@class='templine w_temperature']//span[@class='unit unit_temperature_c']");
$svg = $xpath->query("//*[@class='widget__row widget__row_table widget__row_icon']//span[@class='tooltip']//*[name()='svg']");

$data = [];
for ($i = 0, $iMax = count($timeRanges); $i < $iMax; $i++) {
    $val = preg_replace('/−/','-',$temperaturesPerTime[$i]->nodeValue);
    $data[$i] = (object)array(
        'time' => intval($timeRanges[$i]->nodeValue),
        'temperature' => intval($val)
    );
}
header("Content-Type: image/png");

$dest_img = @imagecreate(500, 200) or die("");
$background_color = imagecolorallocate($dest_img, 255, 255, 255);
$line_red = imagecolorallocate($dest_img, 255, 0, 0);
$line_blue = imagecolorallocate($dest_img, 0, 0, 255);
$left_chunk = imagecreatefrompng("../images/left.png");
$right_chunk = imagecreatefrompng("../images/right.png");
$center_chunk = imagecreatefrompng("../images/center.png");

$moon_img = imagecreatefrompng("../images/moon_sm.png");
$sun_img = imagecreatefrompng("../images/sun_sm.png");
imagefilledrectangle($dest_img, 0, 0, 500, 200, $background_color);

imagecopyresized($dest_img, $left_chunk, 0, 0, 0, 0, 150, 150, 100, 100);
imagecopyresized($dest_img, $right_chunk, 350, 0, 0, 0, 150, 150, 100, 100);
imagecopyresized($dest_img, $center_chunk, 150, 0, 0, 0, 200, 150, 100, 100);
imagecopyresized($dest_img, $sun_img, 225, 10, 0, 0, 50, 50, 64, 64);
imagecopyresized($dest_img, $moon_img, 10, 10, 0, 0, 50, 50, 64, 64);
imagecopyresized($dest_img, $moon_img,490 - 50, 10, 0, 0, 50, 50, 64, 64);

imageantialias($dest_img, true);

imageline($dest_img, 50, 150, 400, 150, $line_blue);

for ($i = 0; $i < count($data) - 1; $i++) {
    $curr_day_temp = intval($data[$i]->{'temperature'});
    $next_day_temp = intval($data[$i + 1]->{'temperature'});
    imageline($dest_img, 50 * ($i + 1), 100 - $curr_day_temp * 2, 50 * ($i + 2), 100 - $next_day_temp * 2, $line_red);
    imagestring($dest_img, 5, 50 * ($i + 1) - 10, (100 - $curr_day_temp * 2) - 15, $curr_day_temp, $line_red);
    imagestring($dest_img, 5, 50 * ($i + 2) - 10, (100 - $next_day_temp * 2) - 15, $next_day_temp, $line_red);
    imageline($dest_img, 50 * ($i + 1), 110, 50 * ($i + 1), 110, $line_blue);
    imagestring($dest_img, 5, (50 * ($i + 1)), 130, intval($data[$i]->{'time'}), $line_blue);
}
imagepng($dest_img);
imagedestroy($dest_img);
?>