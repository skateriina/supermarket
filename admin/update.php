<?php
    require_once '../php/database.php';
    $tovar_id = $_GET['id'];
    $tovar = mysqli_query($connection, "SELECT * FROM tovar WHERE ID_tovar = '$tovar_id'");
    $tovar = mysqli_fetch_assoc($tovar);


?>

<form action="fun/update.php" method="post">
    <input type="hidden" name="ID_tovar" value="<?= $tovar['ID_tovar'] ?>" >
    <p>IMG</p>
    <input type="text" name="img" value="<?= $tovar['img'] ?>">
    <p>Count</p>
    <input type="text" name="count" value="<?= $tovar['count'] ?>">
    <p>Название</p>
    <textarea name="name"><?= $tovar['name'] ?></textarea> <!-- Исправлено название поля -->
    <p>kategoriy</p>
    <input type="text" name="ID_kategoriy_tovarov" value="<?= $tovar['ID_kategoriy_tovarov'] ?>">
    <p>Цена</p>
    <input type="text" name="price" value="<?= $tovar['price'] ?>" >
    <button type="submit">Обновить</button>
</form>
