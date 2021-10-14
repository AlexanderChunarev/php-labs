<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab2.css">
    <meta charset="UTF-8">
</head>
<body>
<h1>Lab 3</h1>
<table>
    <tr>
        <th>N</th>
        <th>Середній бал вступивших на бюджет</th>
        <th>Число вступивших на бюджет</th>
        <th>Недобір</th>
        <th>Число контрактників</th>
        <th>ВУЗ</th>
    </tr>
    <?php
    $file = fopen("../files/data.txt", 'rb');
    $specialty = $_POST["specialty"];

    while (!feof($file)) {
        $string = trim(fgets($file));
        if (strcasecmp($string, $specialty) === 0) {
            $rowNumber = 1;
            $university_count = (int)fgets($file);
            while (!feof($file) && $rowNumber <= $university_count) {
                $average_grade = fgets($file);
                $free_education_students_count = fgets($file);
                $pay_education_students_count = fgets($file);
                $university_name = fgets($file);
                echo "<tr>
                        <td>$rowNumber</td>
                        <td>$average_grade</td>
                        <td>$free_education_students_count</td>
                        <td>-</td>
                        <td>$pay_education_students_count</td>
                        <td>$university_name</td>
                      </tr>";
                ++$rowNumber;
            }
        }
    }
    fclose($file);
    ?>
</table>
</body>
</html>