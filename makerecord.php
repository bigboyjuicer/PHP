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
    <nav class="navbar navbar-light" style="background-color: #F2C666;">
    <div class="container-fluid">
        <a href='main.php' class="navbar-brand">
        <img src="https://img.icons8.com/wired/64/000000/ambulance.png" alt="" width="45" height="45">
        Запись к врачу</a>
        <div class="row justify-content-end">
        <form action='' method='GET'>
                <div>
                    <font size="+2">
                    <a href='profile.php' type="button" class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    <?php
                        echo($_COOKIE['username']);
                    ?>
                    </a>
                    <a href='main.php?exit=true'type='submit' name='delete' class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>
                    </a>
                    </font>
                </div>
        </form>
        </div>
    </div>
    </nav>
    <div class="p-3 mb-2 bg-dark"></div>
    <div class="row justify-content-center">
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