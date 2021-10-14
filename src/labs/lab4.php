<html lang="">
<head>
    <title>PHP Labs</title>
    <link rel="stylesheet" href="../styles/lab2.css">
    <meta charset="UTF-8">
</head>
<body>
<h1>Lab 4</h1>
<section>
    <form method="POST" action="lab4_observe_request.php">
        <label>
            Виберіть область:
            <select name="region">
                <?php
                    $file = file("../files/oblinfo.txt", FILE_IGNORE_NEW_LINES);
                    $rowNumber = 1;
                    for ($i = 1, $iMax = count($file); $i <= $iMax - 1; $i++) {
                        $city = $file[$i];
                        echo "<option value='$city'>$city</option>";
                        $i += 2;
                    }
                ?>
            </select>
        </label>
        <input type="submit">
    </form>
</section>
</body>
</html>