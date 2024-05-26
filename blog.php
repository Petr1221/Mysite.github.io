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
            <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Услуги
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item active" aria-current="page" href="#">Блог</a></li>
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
    <div class="blog row">
    <div class="col-xs-12 col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Мир</strong>
          <h3 class="mb-0">На отдыхе</h3>
          <div class="mb-1 text-muted">10 Мая</div>
          <p class="card-text mb-auto">Да, да не удивляйтесь</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://sun9-21.userapi.com/impf/c847121/v847121648/1da93c/W_NjHf17HWg.jpg?size=1080x1080&quality=96&sign=155881c96197f9e53b77445915a8b86c&c_uniq_tag=wFFgAkw1mSh_1hKYMnirKSx4Z-uG1ZPm4lvJzh0BQGY&type=album" class="bd-placeholder-img" width="250" height="260">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Еда</strong>
          <h3 class="mb-0">Клубниковое варение</h3>
          <div class="mb-1 text-muted">12 Апреля</div>
          <p class="mb-auto">На ужин сегодня у нас клубничное варенье и другие космически вкусные сладости</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="http://risovach.ru/upload/2015/11/generator/sergey-simonov-korol-dizov_99199461_orig_.jpg" class="bd-placeholder-img" width="250" height="260">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Мир</strong>
          <h3 class="mb-0">=Добро и позитив=</h3>
          <div class="mb-1 text-muted">1 Апреля</div>
          <p class="card-text mb-auto">Как известно, что ни делается, всё к лучшему. Поэтому я сегодня ничего не делал</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://sun9-48.userapi.com/impg/xwfmvCXguql7SVYIX8K1RD0NHQ9rZFGTgw_aUw/YJx8o9IMxNQ.jpg?size=1080x1080&quality=96&sign=d376cf763d846a11ee317176299c56d9&c_uniq_tag=uk8_pwZEQtOyN29AOTcPaU9obEOzAN-g4uNWdQ6mHAk&type=album" class="bd-placeholder-img" width="250" height="260">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Мир</strong>
          <h3 class="mb-0">Струячим на студии</h3>
          <div class="mb-1 text-muted">30 Марта</div>
          <p class="card-text mb-auto">Выдался тяжелый день, но картина написана, работа выполнена, так что жду вечером всех в гости</p>
          <a href="#" class="stretched-link">Продолжить чтение</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://sun1-22.userapi.com/s/v1/ig2/tQ1L70YJA35U-zW4fveeVvze4BA978LDqDOiUt1QVLvCHhZWAaGEz4e8YcJZ0D96r3LInz-ao01Jeiaw13IE82hj.jpg?size=400x400&quality=95&crop=217,0,719,719&ava=1" class="bd-placeholder-img" width="250" height="260">
        </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Мир</strong>
            <h3 class="mb-0">События давно минувших лет</h3>
            <div class="mb-1 text-muted">15 Февраля</div>
            <p class="card-text mb-auto">С Озоном на игровой выставке в 2014. Да, было время, а мы идем дальше</p>
            <a href="#" class="stretched-link">Продолжить чтение</a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="https://sun9-21.userapi.com/impg/KYkJ2tr0rX_ra1RmlI7mq1IKY_sivg4Vtdr-XA/IfpL1JnICT4.jpg?size=604x604&quality=95&sign=2745040178d014f7523fb416a988e40a&type=album" class="bd-placeholder-img" width="250" height="260">
          </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mt-4 mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Мир</strong>
              <h3 class="mb-0">Новый Год</h3>
              <div class="mb-1 text-muted">1 Января</div>
              <p class="card-text mb-auto">Поздравляю Всех с праздником, удачной Охоты в Новом Году!</p>
              <a href="#" class="stretched-link">Продолжить чтение</a>
            </div>
              <div class="col-auto d-none d-lg-block">
                <img src="https://polotnos.cdnbro.com/posts/404270-simonov-sergei-kartiny-27.jpg" class="bd-placeholder-img" width="250" height="260">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  <?php include "footer.php"; ?>