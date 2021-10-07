<?php
$h1 = 'Hello world!';
$title = 'Title site';
$date = date('Y');
?>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?=$h1?></h1>
    <h4>Сейчас на дворе: <?=$date?> г.</h4>
</body>
</html>
