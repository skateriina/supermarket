<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="conteiner">
            <div class="nav">
                <ul class="nav_left">
                    <li class="main-menu__item"><a href="index.php" class="main-menu__link main-menu__logo"> <div class="logo"><img src="img/logo1.png" alt=""></div> </a></li>
                </ul>
                <ul class="nav_center">
                    <li  class="main-menu__item"><a href="index.php" class="main-menu__link"> Главная</a></li>
                    <li  class="main-menu__item"><a href="/php/kart.php" class="main-menu__link"> Каталог</a></li>
                    <li  class="main-menu__item"><a href="contact.php" class="main-menu__link"> Контакты </a></li>
                </ul>  
                <ul class="nav_right"> 
                <?php 
        require_once('php/database.php');
        session_start();
                   if (isset($_SESSION['login_user'] )) {
                    $user_check = $_SESSION['login_user'];
                    $query = mysqli_query($connection, "SELECT * FROM user WHERE email = '$user_check'");
                    $rows = mysqli_fetch_array($query);
                    $status = $rows['admin'];
                    $id_user = $rows['ID_user'];
                    var_dump($status);
                    var_dump($id_user);
                    if($status == 1){
                        // header("Location: ../account/admin.php");
                        $admin = '<li  class="nav_right__item"><a href="../admin/admin.php" class="nav_right__link"> Личный кабинет</a></li>';
                    }else{
                        $admin = '<li  class="nav_right__item"><a href="lk2.php" class="nav_right__link"> Личный кабинет</a></li>';
                    }
                    
                    echo  $admin;

                }  
                
                   ?>

                   
                    <li  class="nav_right__item"><a href="enter.php" class="nav_right__link main-menu__icon"> <div class=" nav_right user_icon"><img src="img/user1.png" alt=""></div></a></li>
                </ul>
            </div>
        </div>
        <hr class="line">
    </header>