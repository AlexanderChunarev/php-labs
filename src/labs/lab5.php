<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab5.css">
    <meta charset="UTF-8">
</head>
<body>
<h1>Lab 5</h1>
<section>
    <?php
    function renderElements($root, $dom, $args)
    {
        foreach ($args as $arg) {
            $child = $dom->createElement('div');
            $child->setAttribute('class', 'weather-details');
            $child->appendChild($dom->createElement('span', $arg->{'time'}));
            $child->appendChild(renderSvgElement($dom, $dom->saveHTML($arg->{'icon'})));
            $child->appendChild($dom->createElement('span', $arg->{'temperature'}));
            $root->appendChild($child);
        }
    }

    function renderSvgElement($dom, $icon)
    {
        $template = $dom->createDocumentFragment();
        $template->appendXML("<div>$icon</div>");
        return $template;
    }

    libxml_use_internal_errors(true);
    $url = "https://www.gismeteo.ua/ua/weather-cherkasy-4956/";
//    $url = "https://www.gismeteo.ua/ua/weather-kharkiv-5053/";
    $curl = curl_init($url);
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
        $data[$i] = (object) array(
            'time' => $timeRanges[$i]->nodeValue,
            'temperature' => $temperaturesPerTime[$i]->nodeValue,
            'icon' => $svg[$i],
        );
    }

    $root = $dom->createElement('div');
    $root->setAttribute('class', 'wrapper');
    renderElements($root, $dom, $data);

    echo "<h3>{$title[0]->nodeValue}</h3>";
    echo $dom->saveHTML($root);
    ?>
</section>
</body>
</html>