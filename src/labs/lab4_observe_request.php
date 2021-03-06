<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab2.css">
    <meta charset="UTF-8">
</head>
<body>
<h1>Lab 4</h1>
<table>
    <tr>
        <th>Область</th>
        <th>Населення, тис</th>
        <th>Кількість ВНЗ</th>
        <th>Кількість ВНЗ на 100 тис. населення</th>
    </tr>
    <?php
    $file = fopen("../files/oblinfo.txt", 'rb');
    $selectedRegion = $_POST['region'];
    while (!feof($file)) {
        $region = trim(fgets($file));
        if (strcasecmp($region, $selectedRegion) === 0) {
            $people_count = (int)fgets($file);
            $university_count = (int)fgets($file);
            $number_of_universities_per_peoples = round($people_count / $university_count, 2);
            echo "<tr>  
                        <td>$region</td>
                        <td>$people_count</td>
                        <td>$university_count</td>
                        <td>$number_of_universities_per_peoples</td>
                  </tr>";
            break;
        }
    }
    fclose($file);
    ?>
</table>
</body>
</html>