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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="css/customindex.css" rel="stylesheet">
    <style>
        .expanded {
            flex: 0 0 100%;
            /* Adjust the width of the expanded item as needed */
            /* Adjust the margin between items as needed */
        }
    </style>
    <title>sharesook</title>
</head>

<body>
    <main class="flex-shrink-0">
        <div class="header">
            <?php include "navbar.php"; ?>
            <div class="banner col-xxl-12 col-lg-12">
                <img src="assets/img/welcome.png" class="img-fluid" style="width:100%;" alt="">
            </div>
        </div>
        <div class="container">
            <!-- คำอธิบาย -->
            <section id="Description">

                <div class="row justify-content-start mt-5">
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-xxl-12 col-md-12 col-sm-12 text-center justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class="p-1">
                                <img src="assets/img/7.png" alt="" class="img-fluid" style="width:20px;">
                            </div>
                            <div class="p-1">
                                <h2 class="fw-bolder mb-5"><span class="d-inline" style="color: #29456E;">โรงพยาบาลชุมชนและศูนย์สุขภาพชุมชนเขตเมือง</span></h2>
                            </div>
                            <div class="p-1">
                                <img src="assets/img/8.png" alt="" class="img-fluid" style="width:20px;">
                            </div>
                        </div>
                        <h3 class="fw-bolder mb-5" style="color: #53A0DD;">เป็นหนึ่งในองค์กรที่อยากพัฒนาระบบสุขภาพของไทยให้ดีขึ้นด้วยการพัฒนาโครงการต่างๆเพื่อช่วยเหลือ เด็ก เยาวชน วัยทำงาน ผู้สูงอายุ และคนพิการให้มีคุณภาพชีวิตที่ดี และสร้างความเข้มแข็งให้แก่ชุมชน เพราะเราเชื่อว่า..</h3>
                        <h1 class="fw-bolder mb-5" style="color: #E46270;">"ระบบสุขภาพที่ดีเริ่มต้นจากคุณภาพชีวิตที่ดี"</h1>
                    </div>
                </div>

            </section>
            <!-- End คำอธิบาย -->

            <!-- แผนที่ -->
            <section id="Map">
                <div class="row mb-5 justify-content-center text-center">
                    <div id="map" style="width: 90%; height: 600px;"></div>
                </div>
            </section>
            <!-- End แผนที่-->

            <!-- Targetgroup -->
            <section id="Targetgroup">
                <div class="row mb-5 justify-content-center text-center">
                    <h1 class="fw-bolder" style="color: #6198AE;">กลุ่มเป้าหมาย</h1>
                </div>
                <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card" style="border-style: solid;border-color: #FBD86D;">
                                <div class="img-wrapper"><img src="assets/img/IMG_1293.PNG" class="img-fluid" id="collapse" alt="..." data-bs-toggle="collapse" href="#collapseChilden" role="button" aria-expanded="false" aria-controls="collapseChilden"> </div>
                                <div class="card-body">
                                    <h1 class="card-title text-center fw-bolder mt-4" style="color:#6198AE;">เด็ก</h1>
                                    <div class="collapse" id="collapseChilden">
                                        <div class="row inline-block">
                                            <div class="col">
                                                <h3 class="fw-bolder">เยาชน</h3>
                                            </div>
                                            <div class="col">
                                                <p>(อายุ 15-24 ปี)</p>
                                            </div>
                                        </div>
                                        <p>
                                            เป็นกลุ่มคนที่จะเป็นกํา ลังหลักในอนาคต
                                            มีความคิดสร้างสรรค์และกล้าแสดงออก เยาวชนจึงเป็นกลุ่มที่ต้อง
                                            พัฒนาสภาวะทางอารมณ์(EF)และสนับสนุนรวมถึงสร้างพื้นที่ให้
                                            พวกเราเขาแสดงออกอย่างสร้างสรรค์ ในด้านร่างกายยังมีเรื่อง
                                            ของภาวะอ้วนซึ่งเสี่ยงต่อการเป็นเบาหวาน รวมถึงความผิดปกติ
                                            ของฮอร์โมนในร่างกายที่อาจส่งผลในอนาคตได้
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card" style="border-style: solid;border-color: #E46270;">
                                <div class="img-wrapper"><img src="assets/img/IMG_1292.PNG" class="img-fluid" alt="..." data-bs-toggle="collapse" href="#collapseYouth" role="button" aria-expanded="false" aria-controls="collapseYouth"> </div>
                                <div class="card-body">
                                    <h1 class="card-title text-center fw-bolder mt-4" style="color:#6198AE;">เยาวชน</h1>
                                    <div class="collapse" id="collapseYouth">
                                        <div class="row inline-block">
                                            <div class="col">
                                                <h3 class="fw-bolder">เยาชน</h3>
                                            </div>
                                            <div class="col">
                                                <p>(อายุ 15-24 ปี)</p>
                                            </div>
                                        </div>
                                        <p>
                                            เป็นกลุ่มคนที่จะเป็นกํา ลังหลักในอนาคต
                                            มีความคิดสร้างสรรค์และกล้าแสดงออก เยาวชนจึงเป็นกลุ่มที่ต้อง
                                            พัฒนาสภาวะทางอารมณ์(EF)และสนับสนุนรวมถึงสร้างพื้นที่ให้
                                            พวกเราเขาแสดงออกอย่างสร้างสรรค์ ในด้านร่างกายยังมีเรื่อง
                                            ของภาวะอ้วนซึ่งเสี่ยงต่อการเป็นเบาหวาน รวมถึงความผิดปกติ
                                            ของฮอร์โมนในร่างกายที่อาจส่งผลในอนาคตได้
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card" style="border-style: solid;border-color: #BFE063;">
                                <div class="img-wrapper"><img src="assets/img/IMG_1290.PNG" class="img-fluid" alt="..." data-bs-toggle="collapse" href="#collapseWorker" role="button" aria-expanded="false" aria-controls="collapseWorker"> </div>
                                <div class="card-body">
                                    <h1 class="card-title text-center fw-bolder mt-4" style="color:#6198AE;">วัยทำงาน</h1>
                                    <div class="collapse" id="collapseWorker">
                                        <div class="row inline-block">
                                            <div class="col">
                                                <h3 class="fw-bolder">เยาชน</h3>
                                            </div>
                                            <div class="col">
                                                <p>(อายุ 15-24 ปี)</p>
                                            </div>
                                        </div>
                                        <p>
                                            เป็นกลุ่มคนที่จะเป็นกํา ลังหลักในอนาคต
                                            มีความคิดสร้างสรรค์และกล้าแสดงออก เยาวชนจึงเป็นกลุ่มที่ต้อง
                                            พัฒนาสภาวะทางอารมณ์(EF)และสนับสนุนรวมถึงสร้างพื้นที่ให้
                                            พวกเราเขาแสดงออกอย่างสร้างสรรค์ ในด้านร่างกายยังมีเรื่อง
                                            ของภาวะอ้วนซึ่งเสี่ยงต่อการเป็นเบาหวาน รวมถึงความผิดปกติ
                                            ของฮอร์โมนในร่างกายที่อาจส่งผลในอนาคตได้
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card" style="border-style: solid;border-color: #53A0DD;">
                                <div class="img-wrapper"><img src="assets/img/IMG_1295.PNG" class="img-fluid" alt="..." data-bs-toggle="collapse" href="#collapseOlder" role="button" aria-expanded="false" aria-controls="collapseOlder"> </div>
                                <div class="card-body">
                                    <h1 class="card-title text-center fw-bolder mt-4" style="color:#6198AE;">ผู้สูงอายุ</h1>
                                    <div class="collapse" id="collapseOlder">
                                        <div class="row inline-block">
                                            <div class="col">
                                                <h3 class="fw-bolder">เยาชน</h3>
                                            </div>
                                            <div class="col">
                                                <p>(อายุ 15-24 ปี)</p>
                                            </div>
                                        </div>
                                        <p>
                                            เป็นกลุ่มคนที่จะเป็นกํา ลังหลักในอนาคต
                                            มีความคิดสร้างสรรค์และกล้าแสดงออก เยาวชนจึงเป็นกลุ่มที่ต้อง
                                            พัฒนาสภาวะทางอารมณ์(EF)และสนับสนุนรวมถึงสร้างพื้นที่ให้
                                            พวกเราเขาแสดงออกอย่างสร้างสรรค์ ในด้านร่างกายยังมีเรื่อง
                                            ของภาวะอ้วนซึ่งเสี่ยงต่อการเป็นเบาหวาน รวมถึงความผิดปกติ
                                            ของฮอร์โมนในร่างกายที่อาจส่งผลในอนาคตได้
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="border-style: solid;border-color: #CB6CE6;">
                                <div class="img-wrapper"><img src="assets/img/IMG_1289.PNG" class="img-fluid" alt="..." data-bs-toggle="collapse" href="#collapsedisabledP" role="button" aria-expanded="false" aria-controls="collapsedisabledP"> </div>
                                <div class="card-body">
                                    <h1 class="card-title text-center fw-bolder mt-4" style="color:#6198AE;">คนพิการ</h1>
                                    <div class="collapse" id="collapsedisabledP">
                                        <div class="row inline-block">
                                            <div class="col">
                                                <h3 class="fw-bolder">เยาชน</h3>
                                            </div>
                                            <div class="col">
                                                <p>(อายุ 15-24 ปี)</p>
                                            </div>
                                        </div>
                                        <p>
                                            เป็นกลุ่มคนที่จะเป็นกํา ลังหลักในอนาคต
                                            มีความคิดสร้างสรรค์และกล้าแสดงออก เยาวชนจึงเป็นกลุ่มที่ต้อง
                                            พัฒนาสภาวะทางอารมณ์(EF)และสนับสนุนรวมถึงสร้างพื้นที่ให้
                                            พวกเราเขาแสดงออกอย่างสร้างสรรค์ ในด้านร่างกายยังมีเรื่อง
                                            ของภาวะอ้วนซึ่งเสี่ยงต่อการเป็นเบาหวาน รวมถึงความผิดปกติ
                                            ของฮอร์โมนในร่างกายที่อาจส่งผลในอนาคตได้
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
            <!-- Targetgroup -->

            <!-- Course -->
            <section id="Course" class="CourseSection" style="">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="d-flex flex-row mb-2 mt-5 justify-content-between  text-center">
                            <h1 class="fw-bolder" style="color: #E74A33;"><i class="bi bi-bookmarks-fill"></i> คอร์ส</h1>
                            <a href="movement-couse.php">
                                <p class="next-detail fw-bolder">อ่านต่อ <i class="bi bi-arrow-right-circle-fill" style="font-size:medium;color:#E46270;"></i></p>
                            </a>
                        </div>
                        <div class="row ">
                            <div class="col-xxl-5 col-xl-5 col-md-12 col-sm-12 align-items-center align-content-center text-center">
                                <div class="Course-Show">
                                    <div class="Course-backdrop">
                                    </div>
                                    <a href="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" srcset="" class="Course-Font img-fluid" style="border-radius:2rem;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-md-12 col-sm-12 mb-2 text-left mt-4">
                                <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                <h4 class="fw-bolder">ชื่อเรื่องคอร์ส</h4>
                                <button class="btn-course btn text-white fw-bolder t-50" style="background-color: #E74A33;padding:0.5rem;position: relative;top: 5rem;">ดูเพิ่มเติม</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="row mb-5 mt-5">
                            <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 mb-2 align-items-center align-content-center text-center">
                                <div class="subCourse-Show">
                                    <div class="subCourse-backdrop">
                                    </div>
                                    <a href="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" srcset="" class="subCourse-Font img-fluid" style="border-radius:2rem;">
                                        <p class="text-Course fw-bolder text-white" style="position:relative;bottom:18rem;">เนื้อหาคอร์ส</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Course -->

            <!-- News -->
            <section id="News" class="NewsSection" style="">
                <div class="d-flex flex-row mb-2 mt-5 justify-content-between  text-center">
                    <h1 class="fw-bolder" style="color: #E74A33;">ข่าว</h1>
                    <a href="movement-news.php">
                        <p class="fw-bolder">อ่านต่อ <i class="bi bi-arrow-right-circle-fill" style="font-size:medium;color:#E46270;"></i></p>
                    </a>
                </div>
                <div class="row mb-5">
                    <div class="row mt-3 mb-3">
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End News -->

            <!-- topic -->
            <section id="topic" class="topicSection" style="">
                <div class="d-flex flex-row mb-2 mt-5 justify-content-between  text-center">
                    <h1 class="fw-bolder" style="color: #E74A33;">บทความ</h1>
                    <a href="movement-topic.php">
                        <p class="fw-bolder">อ่านต่อ <i class="bi bi-arrow-right-circle-fill" style="font-size:medium;color:#E46270;"></i></p>
                    </a>
                </div>
                <div class="row mb-5">
                    <div class="row mt-3 mb-3">
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <a href="#">
                                <div class="hightlightSection">
                                    <div class="card" style="">
                                        <img src="https://static.wixstatic.com/media/66130e_cc7a4fe60c9e42ac8ef0778c73f66eb2~mv2.png/v1/fill/w_560,h_370,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Blue%20and%20Cream%20Cute%20Icons%20Icon%20Set%20(3).png" alt="" class="card-img-top">
                                        <h5 class="hightlightTitle fw-bolder text-white">ชื่อเรื่อง</h5>
                                        <div class="card-body">
                                            <p class="fw-light"><i class="bi bi-calendar-week" style="font-size: small;"></i> 07 กันยายน 2566 <i class="bi bi-eye"></i> 238</p>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End topic -->


            <!-- Associate -->
            <section id="associate" class="associateSection" style="margin-bottom:5rem;">
                <div class="row justify-content-center text-center">
                    <h1 class="fw-bolder" style="color: #6198AE;">ภาคีเครือข่าย</h1>
                </div>
                <div class="row">
                    <img src="assets/img/Associate.png" alt="" class="img-fluid">
                </div>
            </section>
            <!-- End Associate -->
        </div>
    </main>
    <?php include "footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        // Initialize map
        var map = L.map('map').setView([13.75, 100.5], 6);

        // Add a tile layer (you can use various map providers)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
    </script>
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


        //Start Expend Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const carouselItems = Array.from(document.querySelectorAll('.carousel-item'));

            carouselItems.forEach((item) => {
                item.addEventListener('click', () => {
                    // Check if the item is already expanded
                    const isExpanded = item.classList.contains('expanded');

                    // Reset all items to their original size
                    carouselItems.forEach((el) => {
                        el.classList.remove('expanded');
                    });

                    if (!isExpanded) {
                        // Expand the clicked item
                        item.classList.add('expanded');
                    }

                    // Calculate the total width of the expanded items
                    let totalExpandedWidth = 0;
                    carouselItems.forEach((el) => {
                        if (el.classList.contains('expanded')) {
                            totalExpandedWidth += el.offsetWidth + 20; // 20 is the margin
                        }
                    });

                    // Scroll the carousel to show the expanded item(s)

                });
            });
        });

        var multipleCardCarousel = document.querySelector(
            "#carouselExampleControls"
        );
        if (window.matchMedia("(min-width: 481px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselExampleControls .carousel-control-next").on("click", function() {
                if (scrollPosition < carouselWidth - cardWidth * 4) {
                    scrollPosition += cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        300
                    );
                }
            });
            $("#carouselExampleControls .carousel-control-prev").on("click", function() {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        300
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
        //End Expend Carousel
    </script>


</body>

</html>