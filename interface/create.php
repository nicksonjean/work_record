<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Criar tarefa</title>
</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar tarefa
                            <a href="<?= $_SESSION['BASE_WEB'] ?>interface/index.php" class="btn btn-danger float-end"><i class="bi bi-backspace"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= $_SESSION['BASE_WEB'] ?>db/actions.php" method="POST">
                            <div class="mb-3">
                                <label>Descrição</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Projeto</label>
                                <input type="text" name="project" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Data</label>
                                <input type="date" name="work_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Hora Inicial</label>
                                <input type="time" name="start_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Hora Final</label>
                                <input type="time" name="final_time" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tempo Transorrido</label>
                                <input type="time" name="elapsed_time" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="create" class="btn btn-primary" title="Salvar tarefa"><i class="bi bi-save"></i></button>
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