<?php
  if (!isset($_COOKIE["login"]) && (!isset($_COOKIE["password"]))) {
    header("location: http://mysite/main.php");
  }
  ?>
<!doctype html>
<html lang="en">
<?php include "head.php"; ?>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <a href="main.php"><img alt ="img1" class="nav-image order-1" src="images/logo.png"></a>
          <?php include "header.php"; ?>
          <button class="navbar-toggler order-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link" href="main.php">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Магазин</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Услуги
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="blog.php">Блог</a></li>
              <li><a class="dropdown-item" href="aboutUs.php">О нас</a></li>
              <li><a class="dropdown-item" href="aboutCompany.php">Контакты</a></li>
            </ul>
          </li>
        </ul>
        </div>
          <form class="row g-3 order-5">
            <div class="input-group">
              <input class="form-control me-auto d-none d-sm-block" type="search" placeholder="Искать" aria-label="Search">
            </div>
          </form>
      </div>
    </nav>
    </header>
      <main>
      <?php include "window.php"; ?>
      <form action="updateUser.php" class="updateUser" id="updateUser" method="post" autocomplete="on">
      <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-5 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://via.placeholder.com/250x250">
              <?=($_COOKIE['login'])?>
            </div>
          </div>
                <?php
                  require_once 'connect.php';
                  $login = ($_COOKIE['login']);
                  $users = mysqli_query($link, "SELECT `name`, `surname`, `phone`, `address`, `education`, `country`, `region` FROM `users` WHERE `login` = '$login' ");
                  $users = mysqli_fetch_all($users);
                  foreach ($users as $user) {
                    ?>
                      <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Профиль пользователя</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Имя</label><input type="text" name="name" class="form-control" placeholder="Введите имя" value="<?php echo $user[0] ?>"><br></div>
                    <div class="col-md-6"><label class="labels">Фамилия</label><input type="text" name="surname" class="form-control" placeholder="Введите фамилию" value="<?php echo $user[1] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Номер телефона</label><input type="text" name="phone" class="form-control" placeholder="Введите номер телефона" value="<?php echo $user[2] ?>"><br></div>
                    <div class="col-md-12"><label class="labels">Адрес</label><input type="text" name="address" class="form-control" placeholder="Введите адрес" value="<?php echo $user[3] ?>"><br></div>
                    <div class="col-md-12"><label class="labels">Образование</label><input type="text" name="education" class="form-control" placeholder="Введите ваш уровень образования" value="<?php echo $user[4] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Страна</label><input type="text" name="country" class="form-control" placeholder="Введите страну" value="<?php echo $user[5] ?>"><br></div>
                    <div class="col-md-6"><label class="labels">Регион</label><input type="text" name="region" class="form-control" placeholder="Введите регион" value="<?php echo $user[6] ?>"></div>
                </div>
                <div class="mt-5 text-center">
                <input type="hidden" name="login" class="form-control" value="<?php echo ($_COOKIE['login']);?>">
                    <?php
                  }
                  ?>
                <input type="submit" class="btn btn-primary" value="Сохранить">
              </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
    </main>
    <?php include "footer.php"; ?>