<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- font awesom icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="css/style.css" rel="stylesheet">

    <title>sharesook</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <main>
        <div class="container">
            <!-- หัวเรื่อง -->
            <section id="movement">
                <div class="row justify-content-center text-center mb-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-tranparent">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav " style="font-size: 22px;">
                                    <li class="nav-item">
                                        <a class="nav-link fw-bolder" href="movement-topic.php">ความเคลื่อนไหว </a> /
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-4 fw-bolder" href="movement-topic.php">บทความ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </section>
            <!-- End หัวเรื่อง -->

            <!-- บทความ -->

            <div class="row justify-content-center mb-5">
                <div class="col-xxl-8 col-xl-8 col-md-8 col-sm-12">
                    <h1 class="fw-bolder mb-4">เด็กจมน้ำหน้าร้อน ภัยเงียบ ความสูญเสียที่ป้องกันได้</h1>
                    <p>29 สิงหาคม 2023</p>
                    
                    <div class="content mb-4">
                        <p style="font-size:1.25rem;"> ipsum dolor, sit amet consectetur adipisicing elit. Ipsa culpa assumenda nulla, voluptatibus dicta beatae maiores quia perferendis sit, odio nobis non sed omnis? Fuga nisi suscipit nihil nemo illo?</p>
                        
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-12 ">
                    <img src="assets/img/1.png" alt="" class="img-fluid d-block h-75">
                    <div class="text-center mt-1">
                        <div class="d-flex justify-content-center fs-5 gap-3">
                            <a class="text-gradient" href="#!"><i class="bi bi-facebook" style="color:#6198AE;"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-instagram" style="color:#6198AE;"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter" style="color:#6198AE;"></i></a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- End บทความ -->
        </div>
        <footer>
            <div id="cookie-consent" class="cookie-consent">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>This website uses cookies to ensure you get the best experience. By using our site, you acknowledge that you have read and understand our <a href="#">Cookie Policy</a>.</p>
                        </div>
                        <div class="col-auto">
                            <button id="accept-cookies" class="btn btn-primary">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        // cookie
        document.addEventListener('DOMContentLoaded', function() {
            const cookieConsent = document.getElementById('cookie-consent');
            const acceptButton = document.getElementById('accept-cookies');

            acceptButton.addEventListener('click', function() {
                // Set a cookie to remember user's choice
                document.cookie = 'cookieConsent=true; expires=1/156';

                // Hide the cookie consent banner
                cookieConsent.style.display = 'none';
            });

            // Check if user has already accepted cookies
            if (document.cookie.indexOf('cookieConsent=true') !== -1) {
                cookieConsent.style.display = 'none';
            }
        });
    </script>
</body>

</html>