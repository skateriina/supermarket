<?php 
    require_once '../../php/database.php';

    $ID_tovar = $_POST['ID_tovar'];
    $img = $_POST['img'];
    $name = $_POST['name'];
    $ID_kategoriy_tovarov = $_POST['ID_kategoriy_tovarov'];
    $count = $_POST['count'];
    $price = $_POST['price'];

    mysqli_query($connection, query:"UPDATE `tovar` SET `count` = '$count', `img` = '$img',`name` = '$name',`ID_kategoriy_tovarov` = '$ID_kategoriy_tovarov', `price` = '$price' WHERE `tovar`.`ID_tovar` = '$ID_tovar' ");

    header("Location: ../admin.php ");