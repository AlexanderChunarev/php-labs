<?php
header("Content-Type: text/html");
$ip = $_POST["ip"];
$url = "http://ip-api.com/json/$ip";
$data = null;

$content = file_get_contents($url);
$data = json_decode($content);

if (!is_null($data)) {
    $img = '../flags_ISO_3166-1/' . strtolower($data->countryCode) . '.png';
    $html = "<div class='info-item'>
            <p>Flag:</p>
            <img src='$img'>
        </div>";
    foreach ($data as $key => $value) {
        $html .= "<div class='info-item'>
                  <p>$key:</p>
                  <p>$value</p>
              </div>";
    }

    echo $html;
}
?>