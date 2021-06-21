<!DOCTYPE html>
<html lang="en">
<head>
<title>Главная страница</title>
</head>
<body background="https://images.freeimages.com/images/large-previews/a3b/website-rays-background-pattern-1637863.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <?php 
        if(isset($_POST['delete'])){
            setcookie('username','');
            setcookie('password','');
            header('Location: auth.php');
        }
        if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){ ?>
            <div class="row justify-content-center">
            <form name='insert' action='' method='POST'>
                <input type='submit' name='delete' value='Выйти из аккаунта' class="btn btn-info">
            </form>
            </div>
        <?php }
        else{
            header('Location: auth.php');
        }
        ?>
</body>
</html>