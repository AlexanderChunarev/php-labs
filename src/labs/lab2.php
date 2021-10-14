<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab2.css">
    <meta content="text/html; charset=utf-8">
</head>
<body>
<h1>Lab 2</h1>
<table>
    <tr>
        <th>N</th>
        <th>Область</th>
        <th>Населення, тис</th>
        <th>Кількість ВНЗ</th>
        <th>Кількість ВНЗ на 100 тис населення</th>
    </tr>
    <?php
    $file = fopen("../files/oblinfo.txt", 'rb');
    $rowNumber = 1;
    $regions = (int)fgets($file);

    while (!feof($file) && $rowNumber <= $regions) {
        $region = fgets($file);
        $people_count = (int)fgets($file);
        $university_count = (int)fgets($file);
        $number_of_universities_per_peoples = round($people_count / $university_count, 2);
        echo "<tr>
                <td>$rowNumber</td>
                <td>$region</td>
                <td>$people_count</td>
                <td>$university_count</td>
                <td>$number_of_universities_per_peoples</td>
              </tr>";
        ++$rowNumber;
    }
    fclose($file);
    ?>
</table>
</body>
</html>