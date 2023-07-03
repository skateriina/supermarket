<?php 
include "../php/database.php";
include "../php/header.php"; 
session_start();

if (isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.scss">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>IMG</th>
            <th>Name</th>
            <th>kategoriy</th>
            <th>Price</th>
            <th>Count</th>

        </tr>
    </div>
    
        <?php

require_once '../php/database.php';

$tovar = mysqli_query($connection, query:"SELECT * FROM `tovar`"); 
$tovar = mysqli_fetch_all($tovar);
foreach ($tovar as $tovar) {
?>
<tr>
    <td><?= $tovar[0] ?></td>
    <td><?= $tovar[4] ?></</td>
    <td><?= $tovar[2] ?></</td>
    <td><?= $tovar[5] ?></</td>
    <td><?= $tovar[3] ?></</td>
    <td><?= $tovar[1] ?></</td>
    <td><a href="update.php?id=<?= $tovar[0] ?>">Изменить</a></td>
    <td><a href="delete.php?id=<?= $tovar[0]?>">Удалить</a></td>
</tr>
<?php
}
?>
    </table>
    <form action="fun/create.php" method="post">
        <p>IMG</p>
        <input type="text" name="img">
        <p>Название</p>
        <textarea name="name"></textarea>
        <p>kategoriy</p>
        <input type="text" name="ID_kategoriy_tovarov">
        <p>Count</p>
        <input type="text" name="count">
        <p>Цена</p>
        <input type="number" name="price">
        <button type="submit">Добавить</button>

    </form>
</body>
</html>
<?php
}else{
// header("Location: ../index.php");
}
?>

<button>
    <a href="../php/logout.php">Выход</a>
</button>
