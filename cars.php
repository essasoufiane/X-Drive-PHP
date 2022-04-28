<?php require_once "data.repo.php";
// var_dump($cars); TEST
?>
<?php require_once "partials/header.php" ?>

<main class="container">

    <h1 class="my-5">
        <?= $carTitle ?>
    </h1>

    <div class="row flex-lg-row flex-xl-row flex-column">
        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[0]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[0]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[0]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-warning"> <?= $cars[1]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[0]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>
        
        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[1]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[1]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[1]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-success"> <?= $cars[1]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[1]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[2]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[2]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[2]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-info"> <?= $cars[2]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[2]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[3]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[3]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[3]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-primary"> <?= $cars[3]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[3]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[4]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[4]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[4]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-danger"> <?= $cars[4]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[4]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white ">
                <h2 class="card-title"><?= $cars[5]["name"] ?></h2>
            </div>

            <div class="card-body">
                <img src="<?= $cars[5]["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
                <hr>
                <p>Origine:
                    <span><?= $cars[5]["pays"] ?></span>
                </p>

                <p>Puissance: <span class="badge badge-warning"> <?= $cars[5]["power"] ?> </span> </p>

                <p>0 à 100 km/h: <span><?= $cars[5]["perf"] ?> sec</span></p>

                <p>Réserver maintenant !</p>
                <button class="btn btn-primary ">Réserver</button>
            </div>
        </div>
        <hr>


    </div>


</main>

<?php require "partials/footer.php" ?>

</body>

</html>