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
    <title>Editar tarefa</title>
</head>

<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar tarefa
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/index.php" class="btn btn-danger float-end"><i class="bi bi-backspace"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connection, $_GET['id']);
                            $query_run = mysqli_query($connection, "SELECT * FROM " . $_ENV['TABLE_NAME'] . " WHERE id='$id'");
                            if (mysqli_num_rows($query_run) > 0) {
                                $row = mysqli_fetch_array($query_run);
                        ?>
                                <form action="<?= $_SESSION['BASE_WEB'] ?>db/actions.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                    <div class="mb-3">
                                        <label>Descrição</label>
                                        <input type="text" name="description" value="<?= $row['description']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Projeto</label>
                                        <input type="text" name="project" value="<?= $row['project']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Data</label>
                                        <input type="date" name="work_date" value="<?= $row['work_date']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Hora Inicial</label>
                                        <input type="time" name="start_time" value="<?= $row['start_time']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Hora Final</label>
                                        <input type="time" name="final_time" value="<?= $row['final_time']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Tempo Transorrido</label>
                                        <input type="time" name="elapsed_time" value="<?= $row['elapsed_time']; ?>" class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary" title="Editar tarefa"><i class="bi bi-save"></i></button>
                                    </div>
                                </form>
                        <?php
                            } else {
                                echo "<h5> Nenhum registro cadastrado </h5>";
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