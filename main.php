<!DOCTYPE html>
<html lang="en">
<head>
<title>Главная страница</title>
</head>
<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
        $db = pg_connect("host='localhost' dbname='php_project' user='postgres' password='123'");
    ?>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a href='main.php' class="navbar-brand">
        <img src="https://img.icons8.com/wired/64/000000/ambulance.png" alt="" width="45" height="45">
        Запись к врачу</a>
        <div class="row justify-content-end">
        <form action='' method='GET'>
                <div class="row justify-content-around">
                    <font size="+2">
                    <a href='profile.php' type="button" class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg>
                    <?php
                        echo($_COOKIE['username']);
                    ?>
                    </a>
                    <a href='deletecookie.php'type='submit' name='delete' class="btn btn-outline-dark">
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
<div class="position-absolute top-50 start-50 translate-middle">
<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col">
    <div class="card h-100">
      <img src="https://medicina-peterburg.ru/images/pediatr-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Педиатр</h5>
        <p class="card-text">Педиатр занимается профилактикой, диагностикой и лечением заболеваний у детей от 0 до 18 лет. Медицинские знания педиатра универсальны. Это главный детский врач, помогающий вырастить здорового ребенка..</p>
	    <div class="col-md-12 text-center">
            <a href="doctors.php?type=педиатр" name='doctors' class="btn btn-primary"> Посмотреть </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.myclinic.ru/upload/iblock/afd/terapevt.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Терапевт</h5>
        <p class="card-text">Врач-терапевт – это специалист широкого профиля, в ведении которого находится оценка общего состояния здоровья человека. </p>
		<div class="col-md-12 text-center">
            <a href="doctors.php?type=терапевт" name='doctors' class="btn btn-primary"> Посмотреть </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://medexpert-kazan.ru/vrach-xirurg.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Хирург</h5>
        <p class="card-text">Хирург – врач, выполняющий оперативные вмешательства, специализируется на диагностике и лечении травм, заболеваний, патологических процессов разного характера.</p>
	    <div class="col-md-12 text-center">
            <a href="doctors.php?type=хирург" name='doctors' class="btn btn-primary"> Посмотреть </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>