<?php 
require_once '../php/database.php'; 

// Проверяем, что ключ "ID_tovar" существует в массиве $_GET
if (isset($_GET['ID_tovar'])) {
    $ID_tovar = $_GET['ID_tovar']; 

    // Выполняем запрос на удаление
    mysqli_query($connection, query:"DELETE FROM `tovar` WHERE `tovar`.`ID_tovar` = '$ID_tovar' ");
}
?>

