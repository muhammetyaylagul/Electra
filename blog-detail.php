<?php

include "database.php";

$id = $_GET["id"];

$sql = "SELECT * FROM posts WHERE id = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$post = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="description" content="<?php echo $post["title"]; ?> hakkında detaylı bilgi.">
    <title> <?php echo $post["title"]; ?> | Electra </title>
    <?php include "head.php"; ?>
</head>
<body>

<?php include "spinner.php"; ?>
<?php include "header.php"; ?>

<!-- BLOG-DETAIL START -->

<div class="container py-5">
    <div class="mb-4">
        <a href="blog.php" class="btn btn-secondary">
            Bloga Dön
        </a>
    </div>

    <article>
        <h1 class="mb-4">
            <?php echo htmlspecialchars($post["title"], ENT_QUOTES, "UTF-8"); ?>
        </h1>

        <p class="text-muted mb-4">
            <?php echo htmlspecialchars($post["created_at"], ENT_QUOTES, "UTF-8"); ?>
        </p>

        <div>
            <?php echo htmlspecialchars($post["content"], ENT_QUOTES, "UTF-8"); ?>
        </div>
    </article>
</div>

<!-- BLOG-DETAIL END -->
    
<!-- FOOTER START -->

<?php include "footer.php"; ?>

<!-- FOOTER END -->