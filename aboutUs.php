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
              <li><a class="dropdown-item" href="blog.php">Блог</a></li>
              <li><a class="dropdown-item active" aria-current="page" href="#">О нас</a></li>
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
      <div class="container">
        <div class="row my-3">
        <h2><b>О картинной галерее</b></h2>
        <div class="col-xs-12 col-md-6">
          <p class="text-main">
            Главный музей искусства России, изменяющий сознание и внушающий доверие. Прошлое, настоящее и будущее объединено в одном пространстве. <b>Трудимся ежедневно с 10:00 до 20:00.</b></p>
            <section class="diagonal-gradient">
              <img class="position-absolute bottom-0 start-0 ms-40">
              <div class="container">
                <div class="row">
                  <div class="col-sm-5 col-lg-5">
                    <div class="mw-sm">
                      <h4>Арт-студия Сергея Симонова</h4>
                    </div>
                  </div>
                  <div class="col-sm-7 col-lg-7">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <div class="mx">
                          <h3 class="mb-1">15k+</h3>
                          <p class="fs-8 mb-1">Студию посетили больше <b>15</b> тысяч человек.</p>
                        </div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="mx">
                          <h3 class="mb-1">1000+</h3>
                          <p class="fs-8 mb-1">За все время было продано более <b>1000</b> картин.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <h3>Наши ценности</h3>
            <div class="icons">
              <i class="bi bi-person-check"></i> <b>Гостеприимство.</b><br> Мы последовательно придерживаемся принципов открытости и доступности.<br>
              <i class="bi bi-arrow-through-heart"></i> <b>Вдохновение.</b><br> Мы считаем, что искусство, просвещение и творчество меняют жизнь людей к лучшему.<br>
              <i class="bi bi-award-fill"></i> <b>Гордость.</b><br> Мы прославляем самобытный гений отечественных художников и осознаем большую ответственность за продолжение традиций Галереи, связанных с сохранением коллекции для будущих поколений<br>
              <i class="bi bi-vector-pen"></i> <b>Ориентация на посетителей.</b><br> Планируя и осуществляя свою деятельность, мы уделяем основное внимание запросам нашей аудитории.<br>
              <i class="bi bi-gear"></i> <b>Соответствие высоким стандартам качества.</b><br> Для всех наших посетителей и партнеров очевидна наша приверженность качеству: в научной деятельности, в работе с коллекцией, в публикациях, в состоянии помещений, на нашем вебсайте, в сувенирной продукции.
              </div>
          </div>
        <div class="col-xs-12 col-md-6">
          <p class="text-add">Быть, а не казаться!</p>
          <div class="thumb-wrap">
            <iframe src="https://vk.com/video_ext.php?oid=-191609045&id=456240465&hd=4" width="100%" height="100%" frameborder="0" allowtransparency="true"  scrolling="no" class="my"></iframe>
          </div>
        </div>
      </div>
      <br>
    </main>
    <?php include "footer.php"; ?>
  