<?php 

include "header.php"; 
?>
    <main>
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


require_once 'database.php';

if (isset($_POST['name'])) {
    $username = $_POST['name'];
    $query = "SELECT * FROM user WHERE login = '$username'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Ошибка выполнения запроса: ' . mysqli_error($connection));
    }
    $user = mysqli_fetch_assoc($result);
    session_start();  
    if ($user) {
        $_SESSION['name'] = $user['name'];
        $_SESSION['surname'] = $user['surname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['patronymic'] = $user['patronymic'];

        echo "<h1>Личный кабинет</h1>";
        echo "<p>Имя: {$_SESSION['name']}</p>";
        echo "<p>Фамилия: {$_SESSION['surname']}</p>";
        echo "<p>Отчество: {$_SESSION['patronymic']}</p>";
        echo "<p>Email: {$_SESSION['email']}</p>";
        echo "<p>Номер телефона: {$_SESSION['phone']}</p>";
        
                
                   if (isset($_SESSION['email'] )) {
                    $user_check = $_SESSION['email'];
                    $query = mysqli_query($connection, "SELECT * FROM user WHERE email = '$user_check'");
                    $rows = mysqli_fetch_array($query);
                    $status = $rows['admin'];
                    $id_user = $rows['ID_user'];
                    if($status == 1){
                        header("Location: ../admin/admin.php");
                       
                    }else{
                        $admin = '<a href="lk2.php" Личный кабинет</a></li>';
                    }
                    
                  

                } 
    } else {
        echo 'Пользователь не найден.';
    }
} else {
    echo 'Имя пользователя не указано.';
}

mysqli_close($connection);
?>
