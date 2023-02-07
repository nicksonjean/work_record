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
    <div class="container mt-4">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?= L::actions_read ?>
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/index.php?lang=<?= $lang ?>" title="<?= L::back ?>" class="btn btn-danger float-end"><i class="bi bi-backspace"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connection, $_GET['id']);
                            $query_run = mysqli_query($connection, "SELECT * FROM " . $_ENV['VIEW_NAME'] . " WHERE id='$id'");
                            if (mysqli_num_rows($query_run) > 0) {
                                $row = mysqli_fetch_array($query_run);
                        ?>
                                <div class="mb-3">
                                    <label><?= L::fields_date ?></label>
                                    <p class="form-control">
                                        <?= $row['week_day'] . ', ' . $row['work_day']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label><?= L::fields_project ?></label>
                                    <p class="form-control">
                                        <?= $row['project']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label><?= L::fields_description ?></label>
                                    <p class="form-control">
                                        <?= $row['description']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label><?= L::fields_start_time ?></label>
                                    <p class="form-control">
                                        <?= $row['start_time']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label><?= L::fields_final_time ?></label>
                                    <p class="form-control">
                                        <?= $row['final_time']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label><?= L::fields_worked_time ?></label>
                                    <p class="form-control">
                                        <?= $row['elapsed_time']; ?>
                                    </p>
                                </div>
                        <?php
                            } else {
                                echo L::none;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>