<!DOCTYPE html>
<html lang="en">
<head>
<title>Главная страница</title>
</head>
<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php 
        $db = pg_connect("host='localhost' dbname='php_project' user='postgres' password='123'");
    ?>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a href='main.php' class="navbar-brand" href="#">
        <img src="https://img.icons8.com/wired/64/000000/ambulance.png" alt="" width="45" height="45">
        Запись к врачу</a>
        <div class="row justify-content-end">
        <form name='insert' action='' method='POST'>
                <div class="row justify-content-around">
                    <font size="+2">   
                    <?php
                        echo($_COOKIE['username']);
                    ?>
                    </font>
                </div>
                <input type='submit' name='delete' value='Выйти из аккаунта' class="btn btn-outline-dark btn-sm">
        </form>
        </div>
    </div>
    </nav>
    <table class="table table-lg">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Специальность</th>
        <th scope="col">Действие</th>
        </tr>
    </thead>
    <?php 
        $query = 'select * from doctor';
        $result = pg_query($db, $query);
        while($row = pg_fetch_assoc($result)){
    ?>
    <tbody>
        <tr>
        <th scope="row"><?php echo $row['id'];?></th>
        <td><?php echo $row['first_name'];?></td>
        <td><?php echo $row['last_name'];?></td>
        <td><?php echo $row['type'];?></td>
        <td>
        <form action='' method="GET" role = "form">
            <?php
            $username = $_COOKIE['username'];
            $id = $row['id'];
            $result1 = pg_query($db, "select * from record where username = '$username' and doctor = '$id'");
            $rows = pg_num_rows($result1);
            if($rows==1){?>
            <a href="deleterecord.php?id=<?php echo $row['id']; ?>" name='deleterecord' class="btn btn-danger"> Отменить запись </a>
            <?php }
            else{?>
            <a href="makerecord.php?id=<?php echo $row['id']; ?>" name='makerecord' class="btn btn-primary"> Записаться </a>
            <?php } 
            ?>
        </form>
        </td>
        </tr>
    </tbody>
    <?php }
    ?>
    </table>
     
    <?php 
        if(isset($_POST['delete'])){
            setcookie('username','');
            setcookie('password','');
            header('Location: auth.php');
        }
        if(!isset($_COOKIE['username']) and !isset($_COOKIE['password'])){
        header('Location: auth.php');
        }
        ?>
</body>
</html>