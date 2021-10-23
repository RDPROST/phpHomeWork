<?php
require_once '../connect.php';
mysqli_query($conn,'UPDATE reviews SET name="'.$_POST['name'].'",review="'.$_POST['comm'].'" WHERE id='.$_POST['id'].';');
header('Location:../index.php');
