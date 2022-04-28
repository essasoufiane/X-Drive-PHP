<?php
require_once "./data.repo.php";
var_dump($cars);
?>



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
