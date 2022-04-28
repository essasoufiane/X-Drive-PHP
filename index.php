<?php
require_once "data.repo.php";
?>
<?php require_once "partials/header.php" ?>


<div class="container">
    <div class="jumbotron my-5 text-center">
        <h1 class="display-3 text-danger">
            Drive-X
        </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
            to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" routerLink="cars" role="button">eXotic Cars</a>
        </p>
    </div>

    <h2 class="my-5 text-center">Nos Pilotes d'Exception</h2>

    <!-- boucle drivers -->


    <div class="d-flex flex-row flex-wrap justify-content-around">
    <?php foreach ($drivers as $driver) : ?>
        <div class="card text-center col-3 shadow m-1">

                <div class="card-header bg-dark text-white">
                    <h2 class="card-title">
                        <?= $driver["fullName"] ?>
                    </h2>
                </div>

                <div class="card-body">

                    <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[0]["fullName"] ?>">
                    <hr>

                    <p>Origine: <span><?= $driver["pays"] ?></span></p>

                    <p>Discipline:
                        <span class="badge badge-success"> <?= $driver["category"] ?> </span>
                    </p>

                    <button class="btn btn-success mx-2 border">
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
                <hr>
            </div>
            <?php endforeach; ?>
</div>


        <!-- boucle ForEach Voitures -->


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

    <p>Puissance: <span class="badge badge-warning"> <?= $cars[0]["power"] ?> </span> </p>

    <p>0 à 100 km/h: <span><?= $cars[0]["perf"] ?> sec</span></p>

    <p>Réserver maintenant !</p>
    <button class="btn btn-primary ">Réserver</button>
</div>
</div>
<hr>
    <!-- ----------test------------ -->

    <?php
    // $tabs = [[1, 2, 3], [3, 4, 5, 4]];
    // var_dump($drivers);


    // $i = 0;
    // while ($i < count($tabs)) {
    //     $j = 0;
    //     while ($j < count($tabs[$i])) {
    //         echo "<p>" . $tabs[$i][$j] . "</p>";
    //         $j++;
    //     }
    //     $i++;
    // }
    ?>

    <?php foreach ($games as $game) : ?>

        <div class="card my-2 shadow p-4 text-center ">
            <h2> <?= $game ?> </h2>
            <button class="btn btn-success">Jouer</button>
        </div>



    <?php endforeach; ?>







</div>

<?php require "partials/footer.php" ?>
<script src="script.js"></script>
</body>

</html>