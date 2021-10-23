<?php
////1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
//// Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
?>
<!--<form action="calc.php" method="post">-->
<!--    <select name="operation" id="calc">-->
<!--        <option value="0">+</option>-->
<!--        <option value="1">-</option>-->
<!--        <option value="2">/</option>-->
<!--        <option value="3">*</option>-->
<!--    </select>-->
<!--    <input type="number" placeholder="что" name="one">-->
<!--    <input type="number" placeholder="с чем" name="two">-->
<!--    <button type="submit">Send</button>-->
<!--</form>-->
<!--2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.-->
<!--<form action="calc.php" method="post">-->
<!--    <input type="number" placeholder="что" name="one">-->
<!--    <input type="number" placeholder="с чем" name="two">-->
<!--    <button type="submit" name="operation" value="0">+</button>-->
<!--    <button type="submit" name="operation" value="1">-</button>-->
<!--    <button type="submit" name="operation" value="2">/</button>-->
<!--    <button type="submit" name="operation" value="3">*</button>-->
<!--</form>-->
<?php
//3. Добавить функционал отзывов в имеющийся у вас проект.
require_once 'connect.php';
$result = mysqli_query($conn,'SELECT * FROM reviews;')
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addComm.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="review" placeholder="Review">
    <button type="submit">Send</button>
</form>
<ol>
    <?php
    while ($row=mysqli_fetch_assoc($result)){
    ?>
    <li><h3><?= $row['name'] ?></h3><p><?= $row['review'] ?></p><a href="/editComm/index.php?id=<?= $row['id'] ?>">edit</a></li>
    <hr>
    <?php
    }
    ?>
</ol>
</body>
</html>
