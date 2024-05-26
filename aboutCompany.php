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
              <li><a class="dropdown-item" href="aboutUs.php">О нас</a></li>
              <li><a class="dropdown-item active" aria-current="page" href="#">Контакты</a></li>
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
            <div class="col-lg-5"><h2>Контактная информация</h2>
              <div class="row">
                <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" text-align="left" height="80px" width="80px" version="1.1" id="Capa_1" viewBox="0 0 464.843 464.843" xml:space="preserve">
                <g>
                <path d="M231.671,262.343c-15.991,0-29,13.01-29,29c0,15.99,13.009,29,29,29c15.991,0,29-13.01,29-29   C260.671,275.353,247.662,262.343,231.671,262.343z M231.671,312.343c-11.58,0-21-9.421-21-21s9.42-21,21-21   c11.58,0,21,9.421,21,21S243.251,312.343,231.671,312.343z"/>
                <path d="M185.671,380.343c-2.209,0-4,1.791-4,4v12c0,2.209,1.791,4,4,4s4-1.791,4-4v-12   C189.671,382.134,187.88,380.343,185.671,380.343z"/>
                <path d="M208.921,380.343c-2.209,0-4,1.791-4,4v12c0,2.209,1.791,4,4,4s4-1.791,4-4v-12   C212.921,382.134,211.13,380.343,208.921,380.343z"/>
                <path d="M232.171,380.343c-2.209,0-4,1.791-4,4v12c0,2.209,1.791,4,4,4s4-1.791,4-4v-12   C236.171,382.134,234.38,380.343,232.171,380.343z"/>
                <path d="M255.421,380.343c-2.209,0-4,1.791-4,4v12c0,2.209,1.791,4,4,4s4-1.791,4-4v-12   C259.421,382.134,257.63,380.343,255.421,380.343z"/>
                <path d="M278.671,380.343c-2.209,0-4,1.791-4,4v12c0,2.209,1.791,4,4,4c2.209,0,4-1.791,4-4v-12   C282.671,382.134,280.88,380.343,278.671,380.343z"/>
                <path d="M218.645,16.132l5.961,2.329l-3.454,5.388c-1.143,1.784-0.698,4.149,1.017,5.396c0.708,0.515,1.531,0.764,2.349,0.764   c1.16,0,2.308-0.503,3.096-1.464l4.057-4.95l4.057,4.95c0.799,0.974,1.978,1.453,3.143,1.464c2.196-0.016,3.971-1.801,3.971-4   c0-0.928-0.316-1.781-0.846-2.46l-3.261-5.087l5.961-2.329c1.974-0.77,3.003-2.947,2.349-4.962   c-0.655-2.015-2.765-3.162-4.817-2.634l-6.191,1.62l-0.373-6.39C235.541,1.652,233.79,0,231.671,0c-2.119,0-3.87,1.652-3.993,3.767   l-0.373,6.39l-6.191-1.62c-2.05-0.53-4.163,0.618-4.817,2.634C215.642,13.185,216.672,15.361,218.645,16.132z"/>
                <path d="M397.987,360.278c-1.342-0.683-2.951-0.557-4.168,0.329l-10.688,7.773l-10.698-7.773c-1.217-0.884-2.826-1.012-4.167-0.328   c-1.34,0.684-2.184,2.061-2.184,3.565v26.5h-16.15v-26.5c0-1.505-0.844-2.882-2.185-3.565c-1.342-0.683-2.951-0.557-4.168,0.329   l-10.688,7.773l-10.688-7.773c-1.217-0.885-2.825-1.011-4.168-0.329c-1.34,0.683-2.184,2.06-2.184,3.565v26.5h-16.18v-59.5   c0-2.209-1.791-4-4-4h-2v-19.067c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v19.067h-5.5v-75c0-2.209-1.791-4-4-4h-7v-91.5   c0-2.209-1.791-4-4-4h-7.959L235.602,37.851c-0.357-1.89-2.008-3.258-3.931-3.258c-1.923,0-3.574,1.368-3.931,3.258L206.13,152.343   h-7.959c-2.209,0-4,1.791-4,4v91.5h-7c-2.209,0-4,1.791-4,4v75h-6v-19.067c0-2.209-1.791-4-4-4s-4,1.791-4,4v19.067h-2   c-2.209,0-4,1.791-4,4v59.5h-14.18v-26.5c0-1.505-0.844-2.882-2.185-3.565c-1.341-0.683-2.951-0.557-4.168,0.329l-10.688,7.773   l-10.688-7.773c-1.216-0.885-2.826-1.011-4.168-0.329c-1.34,0.683-2.185,2.06-2.185,3.565v26.5h-16.15v-26.5   c0-1.504-0.844-2.881-2.184-3.565c-1.34-0.682-2.95-0.555-4.167,0.328l-10.697,7.773l-10.688-7.773   c-1.216-0.885-2.826-1.011-4.168-0.329c-1.34,0.683-2.185,2.06-2.185,3.565v97c0,2.209,1.791,4,4,4h327.5c2.209,0,4-1.791,4-4v-97   C400.171,362.338,399.327,360.961,397.987,360.278z M171.171,334.843h19.75v28.2c0,2.209,1.791,4,4,4s4-1.791,4-4v-28.2h28.5v28.2   c0,2.209,1.791,4,4,4s4-1.791,4-4v-28.2h28.5v28.2c0,2.209,1.791,4,4,4c2.209,0,4-1.791,4-4v-28.2h19.75v85h-120.5V334.843z    M261.171,215.343h-11v-55h11V215.343z M242.171,160.343v55h-21v-55H242.171z M231.671,60.159l17.4,92.184h-34.8L231.671,60.159z    M213.171,160.343v55h-11v-55H213.171z M202.171,223.343h59v24.5h-59V223.343z M191.171,255.843h81v71h-81V255.843z    M72.671,371.697l6.688,4.863c1.402,1.02,3.302,1.018,4.704,0.001l6.699-4.868v22.649c0,2.209,1.791,4,4,4h24.15   c2.209,0,4-1.791,4-4v-22.646l6.688,4.863c1.402,1.02,3.303,1.02,4.705,0l6.688-4.863v22.646c0,2.209,1.791,4,4,4h18.18v58.5h-90.5   V371.697z M171.171,456.843v-29h120.5v29H171.171z M392.171,456.843h-92.5v-58.5h20.18c2.209,0,4-1.791,4-4v-22.646l6.688,4.863   c1.402,1.02,3.303,1.02,4.705,0l6.688-4.863v22.646c0,2.209,1.791,4,4,4h24.15c2.209,0,4-1.791,4-4v-22.649l6.699,4.868   c1.402,1.018,3.302,1.019,4.704-0.001l6.688-4.863V456.843z"/>
                <path d="M241.671,287.343h-6v-6.125c0-2.209-1.791-4-4-4s-4,1.791-4,4v10.125c0,2.209,1.791,4,4,4h10c2.209,0,4-1.791,4-4   C245.671,289.134,243.88,287.343,241.671,287.343z"/>
              </g>
              </svg>
              </div>
              <div class="col-9">
                Телефон: +7 (903) 798-42-16<br>
                Адрес: 12-й пр. Марьиной Рощи,<br>8, стр. 2
              </div>
            </div>
          </div>
              <div class="col-lg-7">
                <section>
                  <div class="contacts-maps">
                    <div id="map-msk" class="map-box">
                    <div style="position:relative; overflow:hidden;">
                    <a href="https://yandex.ru/maps/org/masterskaya_don_simon/84740736911/?utm_medium=mapframe&utm_source=maps" style="color: #eee; font-size: 12px; position: absolute; top: 0px;">Мастерская Дон Симон</a>
                    <a href="https://yandex.ru/maps/213/moscow/category/art_workshop/184105850/?utm_medium=mapframe&utm_source=maps" style="color: #eee; font-size: 12px; position: absolute; top: 14px;">Художественная мастерская в Москве</a><iframe src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=37.616931%2C55.804413&mode=poi&poi%5Bpoint%5D=37.618709%2C55.805097&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D84740736911&z=17.9" width="100%" height="450" frameborder="1" allowfullscreen="true" style="position: relative" loading="lazy">
                    </iframe></div>
                    </div>
                  </div>
                </section>
                </div>
                <div class="container-fluid">
                  <h3>Какие у Вас впечатления от использования сайта?<br> Можете поделиться с нами, заполнив поле ниже!</h3>
                </div>
                <form action="example2.php" class="example2" id="example2" method="post">
                <div class="col-12">
                  <div class="field mt-1">
                    <label for="validationCustom01" class="form-label">Комментарий</label>
                    <textarea type="text" name="comment" class="form-control" placeholder="Введите комментарий" id="validationCustom01" rows="3" required></textarea>
                    <div class="valid-feedback">
                      Все хорошо!
                    </div>
                  </div>
                  <div class="field mt-1">
                    <div class="form-check mt-1">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Принимаю условия соглашения
                      </label>
                      <div class="invalid-feedback">
                        Вы должны принять перед отправкой.
                      </div>
                    </div>
                  </div>
                  <div class="submit1">
                    <input type="submit" class="btn btn-primary" value="Отправить">
                  </div>
                  <br>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    <?php include "footer.php"; ?>