<?php
session_start();
// Подключение к базе данных
require_once 'database.php';

// Проверка, если форма была отправлена
if (isset($_POST['register'])) {
    // Получение данных из формы
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверка, если все поля заполнены
    if (!empty($surname) && !empty($name) && !empty($patronymic) && !empty($phone) && !empty($email) && !empty($login) && !empty($password)) {
        // Проверка, если пользователь с таким логином уже существует
        $query = "SELECT * FROM user WHERE login = '$login'";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $error = 'Пользователь с таким логином уже существует.';
        } else {
            // Хеширование пароля
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Подготовка SQL-запроса для вставки данных в таблицу user
            $query = "INSERT INTO user (surname, name, patronymic, phone, email, login, password) VALUES ('$surname', '$name', '$patronymic', '$phone', '$email', '$login', '$hashedPassword')";

            // Выполнение SQL-запроса
            $result = mysqli_query($connection, $query);

            if ($result) {
                // Регистрация успешна, перенаправление на страницу авторизации
                header('Location: login.php');
                exit();
            } else {
                $error = 'Произошла ошибка при регистрации. Пожалуйста, попробуйте еще раз.';
            }
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="../js/lk.js">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>

        $(document).ready(function() {
            // Настройка маски для номера телефона
            $('#phone').mask('+7 (999) 999-99-99');
            // Ограничение ввода некорректных символов для имени и фамилии (только буквы и дефис)
            $('#surname, #name').on('input', function() {
                var sanitizedValue = $(this).val().replace(/[^a-zA-Z-]/g, '');
                $(this).val(sanitizedValue);
            });
            
            // Ограничение ввода некорректных символов для логина (только буквы, цифры и нижнее подчеркивание)
            $('#login').on('input', function() {
                var sanitizedValue = $(this).val().replace(/[^a-zA-Z0-9_]/g, '');
                $(this).val(sanitizedValue);
            });

        });
    </script>
</head>
<body>
    <header>
        <div class="conteiner">
            <div class="nav">
                <ul class="nav_left">
                    <li class="main-menu__item"><a href="../index.html" class="main-menu__link main-menu__logo"> <div class="logo"><img src="../img/logo1.png" alt=""></div> </a></li>
                </ul>
                <ul class="nav_center">
                    <li  class="main-menu__item"><a href="../index.html" class="main-menu__link"> Главная</a></li>
                    <li  class="main-menu__item"><a href="../catalog.html" class="main-menu__link"> Каталог</a></li>
                    <li  class="main-menu__item"><a href="../contact.html" class="main-menu__link"> Контакты </a></li>
                </ul>  
                <ul class="nav_right"> 
                    <li  class="nav_right__item"><a href="lk.php" class="nav_right__link"> Личный кабинет</a></li>
                    <li  class="nav_right__item"><a href="../enter.html" class="nav_right__link main-menu__icon"> <div class=" nav_right user_icon"><img src="../img/user1.png" alt=""></div></a></li>
                </ul>
            </div>
        </div>
        <hr class="line">
    </header>
    <main>
        <div class="conteiner">
            <div id="login" class="login">
                <div class="login_left">
                    <img src="../img/reg.png" alt="">
                </div>
                <div class="login_right">
                    <h1>Регистрация</h1>
                    <form action="register.php" id="registerform" method="post"name="registerform">
                        <p><label for="user_login">Фамилия<br>
                            <input class="login_right_input" id="surname" name="surname"  type="text" value=""></label></p>
                        <p><label for="user_login">Имя<br>
                            <input class="login_right_input" id="name" name="name" type="text" value=""></label></p>
                        <p><label for="user_login">Отчество<br>
                                <input class="login_right_input" id="patronymic" name="patronymic" type="text" value=""></label></p>
                        <p><label for="user_login">Номер телефона<br>
                                <input class="login_right_input" id="phone" name="phone" type="text" value=""></label></p>
                        <p><label for="user_pass">E-mail<br>
                                <input class="login_right_input" id="email" name="email" type="email" value=""></label></p>
                        <p><label for="user_pass">Логин<br>
                                <input class="login_right_input" id="login" name="login" type="text" value=""></label></p>
                        <p><label for="user_pass">Пароль<br>
                            <input class="login_right_input" id="password" name="password"   type="password" value=""></label></p>
                        <p class="submit"><input class="login_right_button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
                        <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
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