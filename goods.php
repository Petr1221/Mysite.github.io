<?php
    require_once 'connect.php';
    $sql = "SELECT * FROM `goods`";
    $result = $link->query($sql);
    if (isset($_COOKIE["login"]) && (isset($_COOKIE["password"]))) {
        while ($row = $result->fetch_assoc()) {
            echo
            '<div class="card1 col-xs-12 col-md-6 col-xl-4">
                <div class="card h-100">
                    <img class="card-img-top" src="'.$row["image"].'">
                        <div class="card-body">
                            <h5 class="card-title">'.$row["name"].'</h5>
                            <p class="card-text">'.$row["description"].'</p>
                            <p class="card-text"><b>Цена:</b>'.$row["price"].'</p>
                            <button type="button" disabled class="btn btn-primary" id="myButton" data-backdrop="true" data-bs-toggle="modal" data-bs-target="#exampleModal">В корзину</button>
                        </div>
                    </div>
                </div>';
            }
        }
    else if (!isset($_COOKIE["login"]) && (!isset($_COOKIE["password"]))) {
        while ($row = $result->fetch_assoc()) {
        echo
        '<div class="card1 col-xs-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img class="card-img-top" src="'.$row["image"].'">
                    <div class="card-body">
                        <h5 class="card-title">'.$row["name"].'</h5>
                        <p class="card-text">'.$row["description"].'</p>
                        <p class="card-text"><b>Цена:</b>'.$row["price"].'</p>
                        <button type="button" class="btn btn-primary" id="myButton" data-backdrop="true" data-bs-toggle="modal" data-bs-target="#exampleModal">В корзину</button>
                    </div>
                </div>
            </div>';
        }
    }
?>