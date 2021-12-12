<?php
header("Content-type: text/xml; charset=utf-8");
$value = $_GET['value'];
$url = "https://cityshop.net.ua/products?keyword=" . $value;
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$html = curl_exec($curl);
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
$xpath = new DOMXpath($dom);

$search_result = $xpath->query("//div[@class='tile product']");

for ($i = 1, $iMax = count($search_result) - 1; $i <= $iMax; $i++) {
    $img = $xpath->query("//*[@class='image']//img", $search_result[$i])[$i]->getAttribute('src');
    $footer = $xpath->query("//div[@class='footer']//a[@data-product]", $search_result[$i])[$i]->nodeValue;
    $description = $xpath->query("//*[@class='footer']/span[1]", $search_result[$i])[$i]->nodeValue;
    echo "
            <div class='product-item'>
                <img src='https://cityshop.net.ua/$img'>
                <div class='product-item-info'>
                    <h3>$footer</h3>
                    <p>$description</p>
                </div>
            </div>
        ";
}

?>