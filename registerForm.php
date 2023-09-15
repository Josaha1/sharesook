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
    <div class="container">
        <div class="row d-flex flex-sm-column flex-md-row flex-xl-row flex-xxl-row mb-5">
            <div class="col-xxl-5 col-xl-5 col-md-5 col-sm-12 mt-3 text-center">
                <img src="assets/img/1.png" alt="...." class="img-fluid">
            </div>

            <div class="col-xxl-7 col-xl-7 col-md-7 col-sm-12 mt-3 text-left" style="color:#6198AE;">
                <form id="myForm" action="" method="post">
                    <h1 class="fw-bolder">สมัครสมาชิก</h1>
                    <div class="form-group row mb-3">
                        <div class="col-sm-2 control-label mt-2">
                            คำนำหน้า :
                        </div>
                        <div class="col-sm-2">
                            <select name="p_prefix" id="p_prefix" class="form-control  rounded-2 border border-3" required>
                                <option value="">เลือกข้อมูล</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                            </select>
                        </div>
                        <div class="col-sm-2 control-label mt-2">
                            <label for="p_name" class="form-label">ชื่อ - นามสกุล</label>
                        </div>
                        <div class="col-sm-6 control-label">
                            <input type="text" class="form-control rounded-2 border border-3" name="p_name" id="p_name" placeholder="ชื่อ-สกุล (ไม่ต้องใส่นาย/นาง/นางสาว)">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-3 control-label">
                            เบอร์โทร :
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="p_phone" id="p_phone" required class="form-control  rounded-2 border border-3" placeholder="เบอร์มือถือ" pattern="^[0-9]+$" maxlength="10">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-3 control-label">
                            E-Mail :
                        </div>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-3 control-label">
                            Password :
                        </div>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="3" placeholder="ภาษาอังกฤษหรือตัวเลข">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-sm-3 control-label">
                            โปรดระบุ :
                        </div>
                        <div class="col-sm-9">
                            <select name="p_role" id="p_role" class="form-control  rounded-2 border border-3" required>
                                <option value="">เลือกข้อมูล</option>
                                <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                                <option value="โรงพยาบาลชุมชน/ศูนย์สุขภาพชุมชนเขตเมือง">โรงพยาบาลชุมชน/ศูนย์สุขภาพชุมชนเขตเมือง</option>
                                <option value="องค์กรเอกชน">องค์กรเอกชน</option>
                                <option value="องค์กรภาครัฐ">องค์กรภาครัฐ</option>
                                <option value="องค์กรไม่แสวงหากำไร">องค์กรไม่แสวงหากำไร</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 form-group align-items-center text-center row mb-3">
                        <div class="g-recaptcha" data-sitekey="6LdMtd8nAAAAADGqtwRDfrTQwqJfa3xWJVHdPrrg"></div>
                    </div>
                    <p class="col-sm-12 text-left fw-bolder">การสมัครสมาชิกแสดงว่าคุณยอมรับข้อตกลง เงื่อนไข
                        และนโยาบายความเป็นส่วนตัวของเราแล้ว</p>
                    <div class="col-12 text-center">
                        <button class="regisButton btn btn-lg fw-bolder rounded-pill" style="" onclick="sendEmail()" value="Send an email">สมัคร</button>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <p class="fw-bolder">หากท่านเคยสมัครสมาชิกแล้ว?
                            <a href="#"><strong style="color:#E74A33;">เข้าสู่ระบบ</strong></a>
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>