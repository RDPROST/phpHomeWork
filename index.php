<?php
require_once './connect.php';
$result = mysqli_query($conn,'SELECT * FROM images ORDER BY viewed DESC');
while ($row = mysqli_fetch_assoc($result)){
    echo '<a href="/showimage.php?id='.$row['id'].'">';
    echo '<img src="'.$row['name'].'" width="150"/>';
    echo '</a>';
}


