<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require $_SESSION['BASE_DIR'] . 'db/connection.php';

if (isset($_POST['create'])) {
    $project = mysqli_real_escape_string($connection, $_POST['project']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $work_date = mysqli_real_escape_string($connection, $_POST['work_date']);
    $start_time = mysqli_real_escape_string($connection, $_POST['start_time']);
    $final_time = mysqli_real_escape_string($connection, $_POST['final_time']);
    $query_run = mysqli_query($connection, "INSERT INTO " . $_ENV['TABLE_NAME'] . " (project, description, work_date, start_time, final_time) VALUES ('$project', '$description', '$work_date', '$start_time', '$final_time')");
    if ($query_run) {
        $_SESSION['message'] = L::message_success_create;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/create.php?lang=" . $lang);
        exit(0);
    } else {
        $_SESSION['message'] = L::message_failed_create;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/create.php?lang=" . $lang);
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $project = mysqli_real_escape_string($connection, $_POST['project']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $work_date = mysqli_real_escape_string($connection, $_POST['work_date']);
    $start_time = mysqli_real_escape_string($connection, $_POST['start_time']);
    $final_time = mysqli_real_escape_string($connection, $_POST['final_time']);
    $query_run = mysqli_query($connection, "UPDATE " . $_ENV['TABLE_NAME'] . " SET project='$project', description='$description', work_date='$work_date', start_time='$start_time', final_time='$final_time' WHERE id='$id'");
    if ($query_run) {
        $_SESSION['message'] = L::message_success_update;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/index.php?lang=" . $lang);
        exit(0);
    } else {
        $_SESSION['message'] = L::message_failed_update;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/index.php?lang=" . $lang);
        exit(0);
    }
}

if (isset($_POST['delete'])) {
    $id = mysqli_real_escape_string($connection, $_POST['delete']);
    $query_run = mysqli_query($connection, "DELETE FROM " . $_ENV['TABLE_NAME'] . " WHERE id='$id'");
    if ($query_run) {
        $_SESSION['message'] = L::message_success_delete;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/index.php?lang=" . $lang);
        exit(0);
    } else {
        $_SESSION['message'] = L::message_success_delete;
        header("Location: " . $_SESSION['BASE_WEB'] . "interface/index.php?lang=" . $lang);
        exit(0);
    }
}
