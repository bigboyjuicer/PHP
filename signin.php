<!DOCTYPE html>
<html lang="en">
<head>
<title>Вход</title>
</head>
<body background="https://images.freeimages.com/images/large-previews/a3b/website-rays-background-pattern-1637863.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <?php
        if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
            header('Location: main.php');
        }
        else{ ?>
            <div class="row justify-content-center" >
            <br>
            <th> <font size="+3"> Пожалуйста войдите в свой аккаунт </font> </th>
            </br>
            </div>
            <div class="row justify-content-center">
            <form name='' action='' method='POST'>
                <br>
                <div class="form-group">
                <label> Login </label>
                <input type='text' name='username' value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" class='form-control'>
                </div>
                <div class="form-group">
                <label> Password </label>
                <input type='password' name='password' value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" class='form-control'>
                </div>
                <div class="form-group">
                <input type='checkbox' name='remember' class="btn btn-info"> <label> Запомнить меня </label>
                </div>
                <div class="form-group">
                <input type='submit' name='log-in' value='Войти' class="btn btn-info">
                <a href="auth.php" class="btn btn-danger">Назад</a>
                </div>
            </form>
            </div>   
        <?php }
        if(isset($_POST['log-in'])){
            if(isset($_POST['username']) and isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $db = pg_connect("host='localhost' dbname='php_project' user='postgres' password='123'");
                $result = pg_query($db, "select * from profile where username = '$username' and password = '$password'");
                $rows = pg_num_rows($result);
                if($rows==0){
                    echo('<div class="row justify-content-center"> <font size="+2"> Неверный логин или пароль </font> </div>');
                    die();
                }
                if(isset($_POST['remember'])){
                    setcookie('username', $_POST['username'], time()+60*60*24*365);
                    setcookie('password', $_POST['password'], time()+60*60*24*365);
                }
                header('Location: main.php');
            }
        }
    ?>
</body>
</html>