<?php

include "database.php";

$result = $connection->query("SELECT * FROM posts ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    
    <meta name="description" content="Blog Sayfası Meta Description">
    <title>Blog | Electra</title>
    <?php include "head.php"; ?>
</head>
<body>

<?php include "spinner.php"; ?>
<?php include "header.php"; ?>

<!-- BLOG START -->

<div class="container py-5">
    <h1 class="text-center mb-5">Blog</h1>
    <div class="row">
        <?php while ($post = $result->fetch_assoc()) { ?>
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-body d-flex flex-column">
                    <h3 class="card-title">
                        <?php echo htmlspecialchars($post["title"], ENT_QUOTES, "UTF-8"); ?>
                    </h3>
                    <p class="card-text">
                        <?php echo htmlspecialchars(mb_substr($post["content"], 0, 180), ENT_QUOTES, "UTF-8") . "..."; ?>
                    </p>
                    <a href="blog-detail.php?id=<?php echo $post["id"]; ?>"
                       class="btn btn-primary mt-auto">
                        Devamını Oku
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- FOOTER START -->
<?php include "footer.php"; ?>
 <!-- FOOTER END -->