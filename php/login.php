<?php  
session_start();  

// Подключение к базе данных  
require_once 'database.php';  

// Проверка, если форма была отправлена  
if (isset($_POST['login'])) {  
    // Получение данных из формы  
    $login = $_POST['name']; // Исправлено: использовать правильное имя поля для логина 
    $password = $_POST['password'];  
    
    // Проверка, если поля заполнены  
    if (!empty($login) && !empty($password)) {  
        // Подготовка SQL-запроса для проверки логина и пароля  
        $query = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";  
          
        // Выполнение SQL-запроса  
        $result = mysqli_query($connection, $query);  
          
        if ($result && mysqli_num_rows($result) > 0) {  
            // Авторизация успешна, сохраняем информацию о пользователе в сессии  
            $user = mysqli_fetch_assoc($result);  
            $_SESSION['user_id'] = $user['ID_user'];  
            var_dump($user['admin']);
            if ($user['admin'] == 1) {
                // Переход на страницу администратора
                header('Location: admin/admin.php');
                exit();
            } else {
                // Переход на страницу пользователя
                header('Location: lk2.php');
                exit();
            }
        } else {  
            $error = 'Неправильный логин или пароль.';  
        }  
    } else {  
        $error = 'Пожалуйста, заполните все поля формы.';  
    }  
}  

// Закрытие соединения с базой данных  
mysqli_close($connection);  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="conteiner">
            <div class="nav">
                <ul class="nav_left">
                    <li class="main-menu__item"><a href="../index.php" class="main-menu__link main-menu__logo"> <div class="logo"><img src="../img/logo1.png" alt=""></div> </a></li>
                </ul>
                <ul class="nav_center">
                    <li  class="main-menu__item"><a href="../index.php" class="main-menu__link"> Главная</a></li>
                    <li  class="main-menu__item"><a href="../catalog.php" class="main-menu__link"> Каталог</a></li>
                    <li  class="main-menu__item"><a href="../contact.php" class="main-menu__link"> Контакты </a></li>
                </ul>  
                <ul class="nav_right"> 
                <?php 
            require_once('database.php');
     
                   if (isset($_SESSION['login_user'] )) {
                    $user_check = $_SESSION['login_user'];
                    $query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$user_check'");
                    $rows = mysqli_fetch_array($query);
                    $status = $rows['admin'];
                    $id_user = $rows['ID_user'];
                    if($status == 1){
                        // header("Location: ../account/admin.php");
                        $admin = '<li  class="nav_right__item"><a href="../admin/admin.php" class="nav_right__link"> Личный кабинет</a></li>';
                    }else{
                        $admin = '<li  class="nav_right__item"><a href="lk2.php" class="nav_right__link"> Личный кабинет</a></li>';
                    }
                    
                    echo  $admin;

                }  
                
                   ?>

                   
                    <li  class="nav_right__item"><a href="../enter.html" class="nav_right__link main-menu__icon"> <div class=" nav_right user_icon"><img src="../img/user1.png" alt=""></div></a></li>
                </ul>
            </div>
        </div>
        <hr class="line">
    </header>
    <main>
        <div class="conteiner">
            <div id="login" class="login">
                <div  class="login_left">
                    <img src="../img/avt.png" alt="">
                </div>
                <div class="login_right">
                    <h1>Вход</h1>
                    <form action="lk2.php" id="loginform" method="post" name="loginform">
                    <p><label for="user_pass">Логин<br>
                            <input class="login_right_input" id="login" name="name"size="20" type="text" value=""></label></p>
                        <p><label for="user_pass">Пароль<br>
                            <input class="login_right_input" id="password" name="password"size="32"   type="password" value=""></label></p>
                        <p class="submit"><input class="login_right_button" name="login"type= "submit" value="Авторизироваться"></p>
                        <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <hr class="line">
        </div>
        <div class="conteiner">
            <div class="foot">
                <div class="foot_top">
                    <div class="foot_logo">
                        <img src="../img/logo1.png" alt="">
                    </div>
                    <div class="foot_kt">
                        <p> <a href="../catalog.html">Каталог</a></p>
                        <p> <a href="lk.php">Личный кабинет</a></p>
                    </div>
                    <div class="foot_inf">
                        <p>Контакты: 8-(985)-255-43-34</p>
                        <p>Адрес:  г. Москва, ул. Арбат, д.21 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>