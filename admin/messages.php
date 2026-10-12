<?php

session_start();

if(!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

include "../database.php";

include "csrf.php";

$result = $connection->query("SELECT * FROM contacts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Mesajlar | Electra</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1>Gelen Mesajlar</h1>

            <a href="index.php" class="btn btn-secondary">
                Dashboard
            </a>
        </div>
        <div class="card shadow p-4">

            <?php while ($message = $result->fetch_assoc()) { ?>

            <div class="card shadow-sm mb-4">

                <div class="card-body">
                    
                <h4 class="card-title mb-3">
                    <?php echo $message["name"]; ?>
                </h4>

                <p class="mb-2">
                    <strong>E-posta:</strong>
                    <?php echo $message["email"]; ?>
                </p>

                <p class="mb-2">
                    <strong>Telefon:</strong>
                    <?php echo $message["phone"]; ?>
                </p>
                    
                <p class="mb-2">
                <strong>Konu:</strong>
                <?php echo $message["subject"]; ?>
                </p>

                <p class="card-text">
                    <?php echo $message["message"]; ?>
                </p>

                <form method="POST" action="delete-message.php"
                      onsubmit="return confirm('Bu mesajı silmek istediğinize emin misiniz?');">
                    
                    <input type="hidden" name="id"
                           value="<?php echo (int) $message['id']; ?>">
                           
                    <input type="hidden" name="csrf_token"
                           value="<?php echo htmlspecialchars(generateCsrfToken(), ENT_QUOTES, 'UTF-8'); ?>">

                    <button type="submit" class="btn btn-danger">
                        Sil
                    </button>
                </form>

            </div>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>