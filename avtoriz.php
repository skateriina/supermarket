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
    <main>
        <div class="conteiner">
            <div id="login">
                <h1>Вход</h1>
                <form action="" id="loginform" method="post"name="loginform">
                    <p><label for="user_login">Имя опльзователя<br>
                    <input class="input" id="username" name="username"size="20"
                    type="text" value=""></label></p>
                    <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="20"
                    type="password" value=""></label></p> 
                    <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
                    <p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
                </form>
            </div>
        </div>
    </main>
</body>
</html>