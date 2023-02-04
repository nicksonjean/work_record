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
    <title><?= $_ENV['PROJECT_NAME'] ?></title>
</head>

<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Relatório de Horas de Trabalho
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/create.php" class="btn btn-primary float-end"><i class="bi bi-plus"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center">Data</th>
                                    <th class="text-center">Projeto</th>
                                    <th class="text-center">Descrição</th>
                                    <th class="text-center">Horas</th>
                                    <th width="120" class="text-center" width="160">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $mes = (!isset($_GET['mes']) ? date('m') : $_GET['mes']);
                                $ano = (!isset($_GET['ano']) ? date('Y') : $_GET['ano']);
                                $query_run = mysqli_query($connection, "CALL `{$_ENV['PROCEDURE_NAME']}`('" . $mes . "', '" . $ano . "')");
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
                                                    <a href="<?= $_SESSION['BASE_WEB'] ?>interface/read.php?id=<?= $row['id']; ?>" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="<?= $_SESSION['BASE_WEB'] ?>interface/update.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                                    <form action="<?= $_SESSION['BASE_WEB'] ?>db/actions.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?= $row['id']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> Nenhum registro cadastrado </h5>";
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