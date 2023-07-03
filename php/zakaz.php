

<link rel="stylesheet" href="../css/style.css">
<?php 

include "header.php"; 
?>
<div class="conteiner">
            <div class="lkinfo">
                <div class="lkinfo_left">
                <div class="lkinfo_left_center_kor">
                            <p><a href="lk2.php">Личный кабинет</a></p>
                        </div>
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
    <div class="head-product-header">
            <h1>Корзина</h1>
        </div>
        <?php 

            require_once 'database.php'; 
            session_start();
            $user_check = $_SESSION['email'];
            $querys = mysqli_query($connection, "SELECT * FROM user WHERE email = '$user_check'");
            $rowsq = mysqli_fetch_array($querys);
            $id_user = $rowsq['ID_user'];
            
            $query = mysqli_query($connection,"SELECT * FROM zakaz where ID_user = '$id_user' ");
            $suppliers = mysqli_query($connection, "SELECT * FROM zakaz where ID_user = '$id_user' ");
            for($data = []; $row = mysqli_fetch_assoc($query); $data [] = $row);
            foreach($data as $supplier) {
                $prosuctts = mysqli_query($connection,"SELECT * FROM tovar where ID_tovar = '$supplier[ID_tovar]'");
                $rows2 = mysqli_fetch_assoc($prosuctts);
                $nums = mysqli_num_rows($suppliers);
              
                echo '<div class="head-product-content-block">
                        <img src="'. $rows2['img'].'" alt="">
                        <h3>'.  $rows2['name'] .'</h3>
                        <p>'.  $rows2['price'] .' - руб</p>
                         
                    </div>'; 
                }
            
                        ?>
    
        </div>
        
    </div>
</div>
