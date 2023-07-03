<?php



include "../php/header.php"; 


session_start();
require_once 'database.php';

if ($query = $connection->query("SELECT * FROM kategoriy_tovarov WHERE 1")) {
    $sql = $query->fetch_all(MYSQLI_ASSOC);
} else {
    
}

?>

<link rel="stylesheet" href="../css/style.css">
<div class="conteiner">
            <div class="lkinfo">
                <div class="lkinfo_left">
                    <div class="lkinfo_left_center">
                        <div class="lkinfo_left_center_kor">
                            <img src="../img/bag.png" alt="">
                            <p><a href="zakaz.php">Заказы</a></p>
                        </div>
                    </div>
                    <div class="lkinfo_left_enter">
                        <img src="../img/enter.png" alt="">
                        <p><a href="logout.php">Выход</a></p>
                    </div>
                </div>
    <div class="login_right">

<?php


    echo '
    <div class="conteiner">
        <div class="">
            <p></p>
        </div>
    </div>
    <div class="conteiner" style=" width:700px;display:flex; overflow: auto; margin-top:130px; margin-bottom:130px ">';

            $user_check = $_SESSION['email'];
            $querys = mysqli_query($connection, "SELECT * FROM user WHERE email = '$user_check'");
            $rowsq = mysqli_fetch_array($querys);
            $id_user = $rowsq['ID_user'];

    $query = "SELECT * FROM tovar";
    $result = mysqli_query($connection, $query);
    $suppliers = mysqli_query($connection, "SELECT * FROM tovar" );
    for($data = []; $row = mysqli_fetch_assoc($result); $data [] = $row);
    foreach($data as $supplier) {
        $prosuctts = mysqli_query($connection,"SELECT * FROM tovar where ID_tovar = '$supplier[ID_tovar]'");
                $rows2 = mysqli_fetch_assoc($prosuctts);
                $id_products = $supplier['ID_tovar'];
                $name_products = $supplier['name'];
                $data = date('Y-m-d');
                $price = $supplier['price'];
                echo '<div class="head-product-content-block">
                <img src="'. $supplier['img'] .'" alt="">
                <h3>'.  $supplier['count'] .'</h3>
                <p>'.  $supplier['name'] .' - руб</p>
                <p>'.  $supplier['price'] .' - руб</p>
                ';
                echo "<a class='card_add' href='?add_id={$supplier['ID_tovar']}'>Добавить</a>
                </div>"; 
            }
            if (!empty($_GET['add_id'])){
                $supplier = mysqli_query($connection, "INSERT INTO zakaz (`ID_zakaz`, ID_user, ID_tovar ,Data) VALUES (NULL,'$id_user', '$_GET[add_id]', '$data')");        
            }
        

            
        
    
     echo '</div>';


?>