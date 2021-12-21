<?php
header("Content-Type: text/html");
$ip = '109.108.95.93';
$url = "http://ip-api.com/xml/$ip";
$data = simplexml_load_file($url);

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