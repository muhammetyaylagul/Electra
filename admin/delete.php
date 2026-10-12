<?php

session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../database.php";

include "csrf.php";

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if(!$id || $id < 1 || !verifyCsrfToken()) {
    die("Geçersiz istek");
}

$sql = "DELETE FROM posts WHERE id = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: blog.php");
exit;
?>