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
   
    <link href="css/project.css" rel="stylesheet">
    <link href="css/customindex.css" rel="stylesheet">
    <title>sharesook</title>
</head>

<body>
    <?php include "navbar.php"; ?>
    <main>
        <div class="container-lg mt-3 p-4">
            <!-- หัวเรื่อง -->
            <section id="headsection">
                <h4 class="fw-bolder lh-base d-flex justify-content-center" style="text-indent: 3rem;color:#53a0dd;">
                    การพัฒนาระบบสุขภาพให้ดีขึ้นได้ต้องได้รับความร่วมมือจากทุกภาคส่วนไม่ว่าจะเป็นภาครัฐ ภาคเอกชน
                    หรือแม้กระทั่งภาคประชาชน ที่ต้องเข้ามามีส่วนร่วมในการแสดงความคิดเห็น และร่วมลงมือกันสร้างระบบ
                    สุขภาพให้เหมาะสมและสะดวกกับผู้รับบริการ รวมถึงช่วยหย่นระยะเวลาการเดินทางมาโรงพยาบาลและลด
                    ภาระงานของแพทย์ได้ สถาบันพัฒนาระบบบริการสุขภาพองค์รวม ภายใต้ มูลนิธิสาธารณสุขแห่งชาติ จึงเปิด
                    รับข้อเสนอโครงการที่จะช่วยพัฒนาระบบสุขภาพเพื่อให้ประชาชนมีคุณภาพชีวิตที่ดีอย่างที่เรามุ่งหวัง
                </h4>
            </section>
            <!-- End หัวเรื่อง -->

            <section id="project-join" class="d-flex justify-content-center mt-5">
                <h3 class="fw-bolder text-decoration-underline" style="color:#53a0dd;">โครงการที่เข้าร่วมกับเรา</h3>

            </section>
            <div class="row align-items-center mt-5">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <img src="assets/img/child.PNG" class="img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bolder" style="color:#53a0dd;">เด็ก</h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <h3 class="fw-bolder" style="color:#53a0dd;">
                        30 โครงการ
                    </h3>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <img src="assets/img/young.PNG" class="img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bolder" style="color:#53a0dd;">เยาวชน</h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <h3 class="fw-bolder" style="color:#53a0dd;">
                        30 โครงการ
                    </h3>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <img src="assets/img/Man.PNG" class="img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bolder" style="color:#53a0dd;">วัยทำงาน</h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <h3 class="fw-bolder" style="color:#53a0dd;">
                        30 โครงการ
                    </h3>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <img src="assets/img/older.PNG" class="img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bolder" style="color:#53a0dd;">ผู้สูงอายุ</h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <h3 class="fw-bolder" style="color:#53a0dd;">
                        30 โครงการ
                    </h3>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <img src="assets/img/cripple.PNG" class="img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h3 class="card-title fw-bolder" style="color:#53a0dd;">คนพิการ</h3>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center mt-3">
                    <h3 class="fw-bolder" style="color:#53a0dd;">
                        30 โครงการ
                    </h3>
                </div>
            </div>

            <section id="buttonSend" class="mt-2 text-center">
                <button type="button" class="btn btn-lg fw-bolder" onclick="window.location.href = 'project-normal-form.php';" style="
                background-color: #ffda00;
                color:#29456E;
                width: 20rem;
                padding: 2rem;
                font-size: x-large;
                border-radius: 3rem;
                box-shadow: 0px 5px 3px 0 #aa9206;
                ">
                    เข้าร่วมโครงการกับเรา
                </button>
            </section>

        </div>

        <?php include "footer.php"; ?>
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