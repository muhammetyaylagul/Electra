<!DOCTYPE html>
<html lang="en">

<head>
    <title>İletişim Sayfası</title>
    <meta content="İletişim Sayfası Meta Description" name="description">

    <?php include 'head.php'; ?>
</head>

<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<?php include 'header.php'; ?>        

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Bize Ulaşın</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
            <li class="breadcrumb-item active text-primary">iletişim</li>
        </ol>    
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">Bize Ulaşın</h4>
                    <h1 class="display-4 mb-5">Mesajınızla Geleceği Aydınlatın, Bizimle İletişime Geçin</h1>
                    <div class="h-100 overflow-hidden">
                        <iframe class="w-100" style="height: 330px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23983.64971082272!2d27.977055347405244!3d41.28805741107586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b5278f6fa3be55%3A0x70963dfacba272b0!2zw4dlcmtlemvDtnksIFRla2lyZGHEnw!5e0!3m2!1str!2str!4v1779503813712!5m2!1str!2str" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="lh-base mb-4">İletişim Formu</h4>
                    <?php  
                    
                    if (isset($_GET['status'])) {

                        if ($_GET['status'] == 'empty') {
                            echo "<div class='alert alert-warning'>İsim-Soyisim, E-posta ve Telefon alanları zorunludur.</div>";
                        }   
                     
                        if ($_GET['status'] == 'success') {
                            echo "<div class='alert alert-success'>İletişim formunuz başarıyla gönderilmiştir.</div>";
                        }

                        if ($_GET['status'] == 'error') {
                            echo "<div class='alert alert-danger'>İletişim formu gönderilemedi.</div>";
                        }
                    }
                    
                    ?>
                    <form action="contact.php" method="POST">
                        <div class="row g-4">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control border-0" id="name" placeholder="Adınız-Soyadınız">
                                    <label for="name">Adınız-Soyadınız</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control border-0" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="phone" name="phone" class="form-control border-0" id="phone" placeholder="Telefon">
                                    <label for="phone">Telefon</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" name="project" class="form-control border-0" id="project" placeholder="Projeniz">
                                    <label for="project">Projeniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control border-0" id="subject" placeholder="Konu">
                                    <label for="subject">Konu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control border-0" placeholder="Mesaj" id="message" style="height: 125px"></textarea>
                                    <label for="message">Mesaj</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="send" class="btn btn-primary w-100 py-3">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->

<?php include 'footer.php'; ?>

<!-- Footer End -->