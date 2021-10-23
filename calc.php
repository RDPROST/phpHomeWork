<?php
if ($_POST['operation'] == '0'){
    echo (int)$_POST['one'] + (int)$_POST['two'];
} elseif ($_POST['operation'] == '1'){
    echo (int)$_POST['one'] - (int)$_POST['two'];
} elseif ($_POST['operation'] == '2'){
    echo (int)$_POST['one'] / (int)$_POST['two'];
} elseif ($_POST['operation'] == '3'){
    echo (int)$_POST['one'] * (int)$_POST['two'];
}
