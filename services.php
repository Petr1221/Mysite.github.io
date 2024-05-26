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
            <a class="nav-link active" aria-current="page" href="services.php">Магазин</a>
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
      <div class="form-group row">
      <?php include "goods.php"; ?>
      </div>
    </main>
    <?php include "footer.php"; ?>