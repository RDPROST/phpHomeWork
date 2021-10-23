<?php
require_once '../connect.php';
$result = mysqli_fetch_assoc(mysqli_query($conn,'SELECT * FROM reviews WHERE id='.$_GET['id'].';'));
?>
<form action="edit.php" method="post">
    <input type="text" name="name" placeholder="Name" value="<?= $result['name'] ?>"><br>
    <input type="text" name="comm" placeholder="Review" value="<?= $result['review'] ?>"><br>
    <button type="submit" name="id" value="<?=$_GET['id']?>">Edit</button>
</form>
