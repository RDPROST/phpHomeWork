<?php
require_once 'connect.php';
mysqli_query($conn,"INSERT INTO reviews VALUES (DEFAULT,'".$_POST['name']."','".$_POST['review']."');");
header('Location:index.php');
