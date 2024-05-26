<?php
          if (isset($_COOKIE["login"]) && (isset($_COOKIE["password"]))) {
            ?>
            <ul class="navbar-nav ms-auto list-group-horizontal order-3">
            <li class="nav-item">
              <a class="nav-link text-dark active" href="exit.php" title="blank"><i class="bi bi-box-arrow-left" height="30px"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark active" href="profile.php" title="blank"><i class="bi bi-person" height="30px"></i></a>
            </li>
          </ul>
          <?php
            }
            else {
            ?>
            <ul class="navbar-nav ms-auto order-3">
              <li class="nav-item">
                <a class="nav-link text-dark" href="window.php" title="blank" data-backdrop="true" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-person" height="30px"></i></a>
              </li>
            </ul>
        <?php
    } // &#xF4E1
?>