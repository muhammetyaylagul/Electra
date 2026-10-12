<?php

session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../database.php";

include "csrf.php";

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if(!$id || $id < 1) {
    header("Location: blog.php");
    exit;
}

$sql = "SELECT * FROM posts WHERE id = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$post = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!verifyCsrfToken()) {
        die("Geçersiz güvenlik anahtarı. Lütfen tekrar deneyin.");
    }

    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";

    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ssi", $title, $content, $id,);
    $stmt->execute();

    header("Location: blog.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Düzenle | Electra</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="..css/style.css">
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1>Blog Yazısını Düzenle</h1>

        <a href="blog.php" class="btn btn-secondary">
            Bloglara Dön
        </a>
    </div>
    <div class="card shadow p-4">
        <form method="POST">

            <input type="hidden" name="csrf_token"
                   value="<?php echo htmlspecialchars(generateCsrfToken(), ENT_QUOTES, "UTF-8"); ?>" >

            <div class="mb-3">
                <label class="form-label">Başlık</label>

                <input type="text" name="title" class="form-control" value="<?php echo $post["title"]; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">İçerik</label>

                <textarea name="content" class="form-control" rows="8" required><?php echo $post["content"]; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Güncelle
            </button>
        </form>
    </div>
</div>
    
</body>
</html>