<?php require_once "data.repo.php"; // var_dump($drivers); TEST ?>

<?php require_once "partials/header.php" ?>

<main class="container">

    <h1 class="my-5">
        <?= $driverTitle ?>
    </h1>
    
    <div class="row flex-lg-row flex-xl-row flex-column">

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[0]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[0]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[0]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[0]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-success"> <?= $drivers[0]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[1]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[1]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[1]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[1]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-danger"> <?= $drivers[1]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[2]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[2]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[2]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[2]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-info"> <?= $drivers[2]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[3]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[3]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[3]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[3]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-primary"> <?= $drivers[3]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[4]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[4]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[4]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[4]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-danger"> <?= $drivers[4]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[5]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[5]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[5]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[5]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-warning"> <?= $drivers[5]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

        <div class="card text-center shadow my-3">

            <div class="card-header bg-dark text-white">
                <h2 class="card-title">
                    <?= $drivers[6]["fullName"] ?>
                </h2>
            </div>

            <div class="card-body">

                <img src="<?= $drivers[6]["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $drivers[6]["fullName"] ?>">
                <hr>

                <p>Origine: <span><?= $drivers[6]["pays"] ?></span></p>

                <p>Discipline:
                    <span class="badge badge-success"> <?= $drivers[6]["category"] ?> </span>
                </p>

                <button class="btn btn-success mx-2 border">
                    <i class="fas fa-thumbs-up"></i>
                </button>

                <button class="btn btn-danger border">
                    <i class="fas fa-thumbs-down"></i>
                </button>

            </div>
        </div>
        <hr>

    </div>
   
</main>

<?php require "partials/footer.php" ?>

</body>

</html>