<?php

    include 'database.php';

    if(isset($_POST['send'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $project = $_POST['project'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (empty($name) || empty($email) || empty($phone)) {

            header("Location: iletisim.php?status=empty");
            exit;
        }

        $query = "INSERT INTO contacts (name, email, phone, project, subject, message)

        VALUES ('$name', '$email', '$phone', '$project', '$subject', '$message')";

        try {
            mysqli_query($connection, $query);
            header("Location: iletisim.php?status=success");
            exit;
        } catch (Exception $e) {
            header("Location: iletisim.php?status=error");
            exit;
        }
    }

?>
