<?php

session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../database.php";

include "csrf.php";

$result = $connection->query("SELECT * FROM posts ORDER BY id DESC");

if($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!verifyCsrfToken()) {
        die("Geçersiz güvenlik anahtarı. Lütfen tekrar deneyin.");
    }

    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO posts (title, content) VALUES (?, ?)";

    $stmt = $connection->prepare($sql);

    $stmt->bind_param("ss", $title, $content);

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
    <title>Blog Yazıları - Electra Admin</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1>Blog Yazıları</h1>
        <a href="index.php" class="btn btn-secondary">
            Dashboard
        </a>
    </div>

    <div class="card shadow p-4">
        <h3 class="mb-4">Yeni Blog Yazısı</h3>

        <form method="POST">

            <input type="hidden" name="csrf_token"
                   value="<?php echo htmlspecialchars(generateCsrfToken(), ENT_QUOTES, "UTF-8"); ?>" >
            
            <div class="mb-3">
                <label class="form-label">Başlık</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">İçerik</label>
                <textarea name="content" class="form-control" rows="6" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Blog Yazısını Ekle
            </button>
        </form>

        <hr class="my-5">

        <h3 class="mb-4">Blog Yazıları</h3>

        <?php while ($post = $result->fetch_assoc()) { ?>

        <div class="border rounded p-3 mb-3">
            <h4><?php echo $post["title"]; ?></h4>

            <p><?php echo $post["content"]; ?></p>

            <small class="text-muted">
                <?php echo $post["created_at"]; ?>
            </small>

            <div class="mt-3">
                <a href="edit.php?id=<?php echo $post["id"]; ?>"
                    class="btn btn-primary">
                    Düzenle
                </a>

                <form  method="POST" action="delete.php"
                       onsubmit="return confirm('Bu yazıyı silmek istediğinizden emin misiniz?');" >
                
                       <input type="hidden" name="id"
                              value="<?php echo (int) $post['id']; ?>">
                        
                        <input type="hidden" name="csrf_token"
                               value="<?php echo htmlspecialchars(generateCsrfToken(), ENT_QUOTES, "UTF-8"); ?>">
                               
                        <button type="submit" class="btn btn-danger">
                            Sil
                        </button>
                </form>
            </div>
        </div>
        <?php } ?>                                                                                 
    </div>
</div>
    
</body>
</html>