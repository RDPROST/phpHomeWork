<?php
require_once 'connect.php';
$id_image = $_GET["id"];
mysqli_query($conn, 'UPDATE images SET viewed=viewed+1 WHERE id=' . $id_image . ';');
$result = mysqli_fetch_assoc(mysqli_query($conn, 'SELECT * FROM images WHERE id=' . $id_image . ';'));
echo '<img src="' . $result["name"] . '" />';
echo '<p>Просмотров:' . $result["viewed"] . '</p>';
