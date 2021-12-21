<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab2.css">
    <meta charset="UTF-8">
</head>
<body>
    <h1>Lab 3</h1>
    <form method="POST" action="lab3_observe_request.php">
        <?php
        $specialties = file("../files/napr.txt", FILE_IGNORE_NEW_LINES);
        sort($specialties);
        foreach($specialties as $specialty) {
            echo "<input type='radio' name='specialty' value=\"$specialty\" >$specialty</br>";
        }
        ?>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>