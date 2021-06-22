<!DOCTYPE html>
<html lang="en">
<head>
<title>Регистрация</title>
</head>
<body background="https://images.freeimages.com/images/large-previews/a3b/website-rays-background-pattern-1637863.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <div class="row justify-content-center" >
        <br>
        <th> <font size="+3"> Пожалуйста зарегистрируйтесь </font> </th>
        </br>
        </div>
        <div class="row justify-content-center">
        <form name='' action='' method='POST'>
            <br>
            <div class="form-group">
            <label> Login </label>
            <input type='text' name='username' class='form-control'>
            </div>
            <div class="form-group">
            <label> Password </label>
            <input type='password' name='password' class='form-control'>
            </div>
            <div class="form-group">
            <input type='submit' name='log-in' value='Войти' class="btn btn-info">
            <a href="auth.php" class="btn btn-danger">Назад</a>
            </div>
        </form>
        </div>    
        <?php
        if(isset($_POST['log-in'])){
            if(isset($_POST['username']) and isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $db = pg_connect("host='localhost' dbname='php_project' user='postgres' password='123'");
                $result = pg_query($db, "select * from profile where username = '$username'");
                $rows = pg_num_rows($result);
                if($rows==1){
                    echo('<div class="row justify-content-center"> <font size="+2"> Пользователь с таким именем уже существует </font> </div>');
                }
                else{
                    if(empty(trim($username)) or empty(trim($password))){
                        echo('<div class="row justify-content-center"> <font size="+2"> Вы не ввели логин или пароль </font> </div>');
                    }
                    else{
                        $query = "insert into profile values ('$username', '$password')";
                        $result = pg_query($db, $query);
                        header('Location: signin.php');
                    }
                }
            }
        }
    ?>
</body>
</html>