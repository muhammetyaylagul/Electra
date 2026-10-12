<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electra Admin Paneli</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

<div class="container py-5">
    
    <div class="d-flex justify-content-between align-items-center- mb-5">
        <div>
            <h1>Electra Admin Paneli</h1>
            <p class="text-muted">
                Hoş geldin, <?php echo $_SESSION["admin"]; ?>
            </p>
        </div>

        <a href="logout.php" class="btn btn-danger">
            Çıkış Yap
        </a>
    </div>

    <div class="row g-4">

         <div class="col-md-4 d-flex">
            <div class="card shadow p-4 text-center w-100 d-flex flex-column">
                <h3>Blog Yazıları</h3>
                <p class="text-muted">
                    Blog yazılarını yönet.
                </p>
                <a href="blog.php" class="btn btn-primary mt-auto">
                    Blog Yazıları
                </a>
            </div>
        </div>

        <div class="col-md-4 d-flex">
            <div class="card shadow p-4 text-center w-100 d-flex flex-column">
                <h3>Gelen Mesajlar</h3>
                <p class="text-muted">
                    İletişim formundan gelen mesajları görüntüle.
                </p>
                <a href="messages.php" class="btn btn-primary mt-auto">
                    Mesajlar
                </a>
            </div>
        </div>
    </div>

</div>
    

</body>
</html>