<?php require_once "data.repo.php";
// var_dump($cars); TEST
?>
<?php require_once "partials/header.php" ?>

<main class="container">

    <h1 class="my-5 text-center">
        <?= $carTitle ?>
    </h1>
    <hr>

    <div class="d-flex flex-row flex-wrap justify-content-around">


    <?php foreach ($cars as $car) : ?>
        <div class="card text-center shadow my-3">

        <div class="card-header bg-dark text-white ">
            <h2 class="card-title"><?= $car["name"] ?></h2>
        </div>

        <div class="card-body">
            <img src="<?= $car["coverImage"] ?>" class="img-fluid" alt="photo de bugatti">
            <hr>
            <p>Origine:
                <span><?= $car["pays"] ?></span>
            </p>

            <p>Puissance: <span class="badge badge-warning"> <?= $car["power"] ?> </span> </p>

            <p>0 à 100 km/h: <span><?= $car["perf"] ?> sec</span></p>

            <p>Réserver maintenant !</p>
            <button class="btn btn-primary ">Réserver</button>
        </div>
        <hr>
    </div>
    <?php endforeach; ?>
    </div>


</main>

<?php require "partials/footer.php" ?>

</body>

</html>