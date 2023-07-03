<?php
require_once '../../php/database.php';

    $img = $_POST['img']; 
    $name = $_POST['name']; 
    $ID_kategoriy_tovarov = $_POST['ID_kategoriy_tovarov']; 
    $count = $_POST['count']; 
    $price = $_POST['price'];


    mysqli_query($connection, "INSERT INTO tovar (`ID_tovar`, `count`, `name`, `price`, `img`, `ID_kategoriy_tovarov`) VALUES (NULL, '$count', '$name', '$price', '$img', '$ID_kategoriy_tovarov')");


?>