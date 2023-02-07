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
    <style>
        #work-sheet>tbody td:nth-child(3),
        #work-sheet>tbody td:nth-child(5) {
            text-align: center;
        }

        #work-sheet>tbody>tr:last-child>td:nth-child(5) {
            text-align: center;
            font-weight: bolder;
        }
    </style>
    <title><?= L::title ?></title>
</head>

<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?= L::title ?>
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/create.php?lang=<?= $lang ?>" title="<?= L::actions_create ?>" class="btn btn-primary float-end"><i class="bi bi-plus"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table id="work-sheet" class="table table-bordered table-striped table-hover table-responsive align-middle table-sm">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center"><?= L::fields_date ?></th>
                                    <th class="text-center"><?= L::fields_project ?></th>
                                    <th class="text-center"><?= L::fields_description ?></th>
                                    <th class="text-center"><?= L::fields_hours ?></th>
                                    <th width="120" class="text-center" width="160"><?= L::fields_action ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query_run = mysqli_query($connection, "CALL `{$_ENV['PROCEDURE_NAME']}`('" . $month . "', '" . $year . "')");
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td width="40"><?= $row['work_day']; ?></td>
                                            <td width="20"><?= $row['week_day']; ?></td>
                                            <td width="80"><a href="<?= $_ENV['JIRA_URL'] ?><?= $row['project']; ?>" target="_blank"><?= $row['project']; ?></a></td>
                                            <td><?= $row['description']; ?></td>
                                            <td width="40"><?= $row['elapsed_time']; ?></td>
                                            <td>
                                                <?php if ($row['id']) { ?>
                                                    <a href="<?= $_SESSION['BASE_WEB'] ?>interface/read.php?id=<?= $row['id']; ?>&lang=<?= $lang ?>" title="<?= L::actions_read ?>" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="<?= $_SESSION['BASE_WEB'] ?>interface/update.php?id=<?= $row['id']; ?>&lang=<?= $lang ?>" title="<?= L::actions_update ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <form action="<?= $_SESSION['BASE_WEB'] ?>db/actions.php&lang=<?= $lang ?>" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?= $row['id']; ?>" title="<?= L::actions_delete ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo L::none;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>