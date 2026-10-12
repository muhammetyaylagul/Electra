<?php

if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function generateCsrfToken(): string
{
    if(empty($_SESSION["csrf_token"])) {
        $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    }

    return $_SESSION["csrf_token"];
}

function verifyCsrfToken(): bool
{
    return isset($_POST["csrf_token"], $_SESSION["csrf_token"])
    && is_string($_POST["csrf_token"])
    && hash_equals($_SESSION["csrf_token"], $_POST["csrf_token"]);
}

?>