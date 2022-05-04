<div class="card text-center shadow my-3
            <?php echo ($driver["likeIts"] > 0) ? 'border border-success': (($driver["likeIts"] < 0) ? 'border border-danger' : "") ?>">

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($driver["fullName"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

        <p>Origine: 
            <?php if ($driver["pays"]): ?>
                <span><?= mb_strtoupper($driver["pays"])?></span>
                    <?php else: ?>
                        <span>NC</span>
            <?php endif; ?>
        </p>

        <p>Discipline:
            <?php  driverCategorySwitch($driver["category"])?>
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

