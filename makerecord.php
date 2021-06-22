<!DOCTYPE html>
<html lang="en">
<head>
<title>Вход</title>
</head>
<body>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php
        $id = $_GET['id'];
    ?>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a href='main.php' class="navbar-brand">
        <img src="https://img.icons8.com/wired/64/000000/ambulance.png" alt="" width="45" height="45">
        Запись к врачу</a>
        <div class="row justify-content-end">
        <form name='' action='' method='POST'>
                <div class="row justify-content-around">
                    <font size="+2">
                    <a href=''>
                    <?php
                        echo($_COOKIE['username']);
                    ?>
                    </a>
                    </font>
                </div>
                <input type='submit' name='delete' value='Выйти из аккаунта' class="btn btn-outline-dark btn-sm">
        </form>
        </div>
    </div>
    </nav>
    <div class="p-3 mb-2 bg-dark text-white"></div>
    <div class="row justify-content-center" >
            <br>
            <th> <font size="+2"> Пожалуйста выберите время на которое хотите записаться </font> </th>
            </br>
            </div>
            <div class="row justify-content-center">
            <form name='insert' action='' method='POST'>
                <br>
                <div class="form-group">
                <label> Дата </label>
                <input type='date' name='date' class='form-control'>
                </div>
                <div class="form-group">
                <label> Время </label>
                <input type='time' name='time' class='form-control'>
                </div>
                <input type='submit' value='Записаться' name='recordbtn' class="btn btn-primary"></a>
                <a href="main.php" class="btn btn-danger">Назад</a>
                </div>
            </form>
    </div>
    <?php
        if(!isset($_COOKIE['username']) and !isset($_COOKIE['password'])){
            header('Location: auth.php');
        }
        if(isset($_POST['recordbtn'])){
            $date = $_POST['date'];
            $time = $_POST['time'];
            $username = $_COOKIE['username'];
            $db = pg_connect("host='localhost' dbname='php_project' user='postgres' password='123'");
            $result = pg_query($db, "insert into record(time, date, doctor, username) values('$time', '$date', '$id', '$username')");
            header('Location: main.php');
        }
    ?>
</body>
</html>