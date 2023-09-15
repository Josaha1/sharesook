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
    <link href="css/project.css" rel="stylesheet">
    <title>sharesook</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <main>
        <div class="container mt-3">
            <!-- หัวเรื่อง -->
            <section id="movement">
                <h2 class="fw-bolder">โครงการ</h2>
            </section>

            <!-- End หัวเรื่อง -->

            <!-- โครงการ -->
            <div class="menu-search">
                <div class="row justify-content-start mb-5 mt-5">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="input-group mb-3" style="border-color: black;">
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                            <button class="btn" type="button" value="" aria-label="Checkbox for following text input"><i class="bi bi-search" style="font-size:medium;"></i></button>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <select class="form-select fw-bolder form-select-md mb-3" aria-label=".form-select-lg example">
                            <option selected>เลือกประเภทเนื้อหา</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <select class="form-select fw-bolder form-select-md mb-3" aria-label=".form-select-lg example">
                            <option selected>เรียงลำดับข้อมูล</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mt-3 mb-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <a href="project-detail.php">
                        <div class="hightlightSection">
                            <div class="card" style="">
                                <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                <div class="card-body">
                                    <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn-join btn btn-primary btn-lg col-12"><i class="bi bi-people-fill" style="font-size: 1rem;"></i> สนใจเข้าร่วมโครงการ</button>
                                </div>
                            </div>
                        </div>
                    </a>
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