<!DOCTYPE html>
<html lang="en">
<head>
<title>Авторизация</title>
</head>
<body background="https://images.freeimages.com/images/large-previews/a3b/website-rays-background-pattern-1637863.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <div class="row justify-content-center" >
        <br>
        <th> <font size="+2"> Пожалуйста выберите способ входа </font> </th>
        </br>
        </div>
        <div class="row justify-content-center">
        <form name='insert' action='' method='POST'>
            <br>
            <div class="form-group">
            <input type='submit' name='sign-in' value='Войти' class="btn btn-danger">
            <input type='submit' name='sign-up' value='Зарегистрироваться' class="btn btn-info">
            </div>
        </div>
        </form>
    </div>
    <?php
    if(isset($_POST['sign-in'])){
        header('Location: signin.php');
    }
    if(isset($_POST['sign-up'])){
        header('Location: signup.php');
    }
    ?>  
</body>
</html>