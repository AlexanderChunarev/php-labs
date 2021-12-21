<html lang="en">
<head>
    <title>PHP Labs</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/lab8.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
<form class="form" onsubmit="" id="form">
    <label for="ip">IP lookup: </label>
    <input type="text" id="ip" pattern="^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$"><br>
    <button type="submit">IP Lookup</button>
</form>
<div class="wrapper">
    <div>
        <h3>XML Result</h3>
        <div id="result-xml"></div>
    </div>
    <div>
        <h3>JSON Result</h3>
        <div id="result-json"></div>
    </div>
</div>
<script src="lab8.js"></script>
</body>
</html>