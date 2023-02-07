<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require $_SESSION['BASE_DIR'] . 'db/connection.php';
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= L::title ?></title>
</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?= L::actions_create ?>
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/index.php?lang=<?= $lang ?>&month=<?= $month ?>&year=<?= $year ?>" title="<?= L::back ?>" class="btn btn-danger float-end"><i class="bi bi-backspace"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= $_SESSION['BASE_WEB'] ?>db/actions.php?lang=<?= $lang ?>&month=<?= $month ?>&year=<?= $year ?>" method="POST">
                            <div class="mb-3">
                                <label><?= L::fields_description ?></label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?= L::fields_project ?></label>
                                <input type="text" name="project" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?= L::fields_date ?></label>
                                <input type="date" name="work_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?= L::fields_start_time ?></label>
                                <input type="time" name="start_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?= L::fields_final_time ?></label>
                                <input type="time" name="final_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label><?= L::fields_worked_time ?></label>
                                <input type="time" name="elapsed_time" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="create" class="btn btn-primary" title="<?= L::actions_create ?>"><i class="bi bi-save"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>