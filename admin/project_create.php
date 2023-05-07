<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$projname = $service = $location = $engtype = $engtype1 = $distance = $type = $date = $top_1 = $top_2 = $top_3 = $top_4 = $top_5 = $table1 = $table1_p = $table1_li1 = $table1_li2 = $table1_li3 = $table1_li4 = $table2 = $table2_p = $table2_li1 = $table2_li2 = $table2_li3 = $table2_li4 = $end_p =  "";
$projname__err = $service__err = $location__err = $price_err= $engtype__err = $engtype1__err = $distance__err = $type__err = $date__err = $top_1__err = $top_2__err = $top_3__err = $top_4__err = $top_5__err = $table1__err = $table1_p__err = $table1_li1__err = $table1_li2__err = $table1_li3__err = $table1_li4__err = $table2__err =  $table2_p__err = $table2_li1__err = $table2_li2__err = $table2_li3__err = $table2_li4__err = $end_p__err ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$projname =$_POST['projname'];
    if (empty(trim($_POST["projname"]))) {
        $projname_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $projname = trim($_POST["projname"]);
        }
    if (empty(trim($_POST["service"]))) {
        $service_err = "مينفعش تتساب فاضية يسطا";
    } else {
        $service = trim($_POST["service"]);
    }
            
    if (empty(trim($_POST["location"]))) {
        $location_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $location = trim($_POST["location"]);
        }
            
    if (empty(trim($_POST["engtype"]))) {
        $engtype_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $engtype = trim($_POST["engtype"]);
        }
    if (empty(trim($_POST["engtype1"]))) {
        $engtype1_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $engtype1 = trim($_POST["engtype1"]);
        }
    if (empty(trim($_POST["distance"]))) {
        $distance_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $distance = trim($_POST["distance"]);
        }
    if (empty(trim($_POST["type"]))) {
        $type_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $type = trim($_POST["type"]);
        }
    if (empty(trim($_POST["top_p1"]))) {
        $top_p1_err = "مينفعش تتساب فاضية يسطا"; 
        } else {
            $top_p1 = trim($_POST["top_p1"]);
        }
    if (empty(trim($_POST["top_p2"]))) {
        $top_p2_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $top_p2 = trim($_POST["top_p2"]);
        }
    if (empty(trim($_POST["top_p3"]))) {
        $top_p3_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $top_p3 = trim($_POST["top_p3"]);
        }
    if (empty(trim($_POST["top_p4"]))) {
        $top_p4_err = "مينفعش تتساب فاضية يسطا";
        } else {
            $top_p4 = trim($_POST["top_p4"]);
        }
$top_p5 = trim($_POST["top_p5"]);
$tabel1 = trim($_POST["tabel1"]);
$table1_p = trim($_POST["table1_p"]);
$table1_li1 = trim($_POST["table1_li1"]);
$table1_li2 = trim($_POST["table1_li2"]);
$table1_li3 = trim($_POST["table1_li3"]);
$table1_li4 = trim($_POST["table1_li4"]);
$table2 = trim($_POST["table2"]);
$table2_p = trim($_POST["table2_p"]);
$table2_li1 = trim($_POST["table2_li1"]);
$table2_li2 = trim($_POST["table2_li2"]);
$table2_li3 = trim($_POST["table2_li3"]);
$table2_li4 = trim($_POST["table2_li4"]);
$end_p = trim($_POST["end_p"]);
    // Upload Variables
    $photoname = $_FILES['photo']['name'];
    $photosize = $_FILES['photo']['size'];
    $tmp  = $_FILES['photo']['tmp_name'];
    $phototype = $_FILES['photo']['type'];
    // List Of Allowed File Type to Upload
    $photoAllowedExtension = array('jpeg','webp','png','jpg');
    // Get Photo Extension
    // $tmp = explode('.', $photoname);
    $photoExtension = substr( strrchr($photoname, '.'), 1);
       if(! empty($photoname) && ! in_array($photoExtension , $photoAllowedExtension )){
        $formErrors[] = 'الصيغة بتاعت الصورة مش مناسبة';
    }
    
    if (empty ($formErrors)) {
        $photo = rand(0,100000) . '_' . $photoname;
       move_uploaded_file($tmp,"..\uploads\projects\\" . $photo);
       
    }
    // Upload Variables
    $picname = $_FILES['pic']['name'];
    $picsize = $_FILES['pic']['size'];
    $pictmp  = $_FILES['pic']['tmp_name'];
    $pictype = $_FILES['pic']['type'];
    // List Of Allowed File Type to Upload
    $picAllowedExtension = array('jpeg','webp','png','jpg');
    // Get Photo Extension
    // $tmp = explode('.', $photoname);
    $picExtension = substr( strrchr($picname, '.'), 1);
       if(! empty($picname) && ! in_array($picExtension , $picAllowedExtension )){
        $formErrors[] = 'الصيغة بتاعت الصورة مش مناسبة';
    }
    
    if (empty ($formErrors)) {
        $pic = rand(0,100000) . '_' . $picname;
       move_uploaded_file($pictmp,"..\uploads\projects\\" . $pic);
       
    }
     // Upload Variables
     $gotname = $_FILES['got']['name'];
     $gotsize = $_FILES['got']['size'];
     $gottmp  = $_FILES['got']['tmp_name'];
     $gottype = $_FILES['got']['type'];
     // List Of Allowed File Type to Upload
     $gotAllowedExtension = array('jpeg','webp','png','jpg');
     // Get Photo Extension
     // $tmp = explode('.', $photoname);
     $gotExtension = substr( strrchr($gotname, '.'), 1);
        if(! empty($gotname) && ! in_array($gotExtension , $gotAllowedExtension )){
         $formErrors[] = 'الصيغة بتاعت الصورة مش مناسبة';
     }
     
     if (empty ($formErrors)) {
         $got = rand(0,100000) . '_' . $gotname;
        move_uploaded_file($gottmp,"..\uploads\projects\\" . $got);
        
     }
    
     // Check input errors before inserting in database
     if (empty($projectname_err) && empty($service_err) && empty($location_err) && empty($engtype_err) && empty($engtype1_err) && empty($distance_err) && empty($type_err) && empty($date_err) && empty($top_p1_err) && empty($top_p2_err) && empty($top_p3_err) && empty($top_p4_err) ) {

        // Prepare an insert statement
        $sql = "INSERT INTO projects (projectname, service, location, engtype, engtype1, distance, type, date, top_p1, top_p2, top_p3, top_p4, top_p5, table1,table1_p,table1_li1,table1_li2,table1_li3,table1_li4,table2,table2_p,table2_li1,table2_li2,table2_li3,table2_li4,end_p,photo1,photo2,photo3,author) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,'{$_SESSION["username"]}')";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssss",$param_projname, $param_service, $param_location, $param_engtype, $param_engtype1, $param_distance, $param_type, $param_date, $param_top_p1, $param_top_p2, $param_top_p3, $param_top_p4, $param_top_p5, $param_tabel1, $param_table1_li1, $param_table1_li2, $param_table1_li3, $param_table1_li4, $param_table1_p, $param_table2, $param_table2_p, $param_table2_li1, $param_table2_li2, $param_table2_li3, $param_table2_li4, $param_end_p,$param_photo1,$param_photo2,$param_photo3);

            // Set parameters
            $param_projname = $projname;
            $param_service = $service;
            $param_location = $location; 
            $param_engtype = $engtype;
            $param_engtype1 = $engtype1;
            $param_distance = $distance;
            $param_type = $type;
            $param_date = $date;
            $param_top_p1 = $top_p1;
            $param_top_p2 = $top_p2;
            $param_top_p3 = $top_p3;
            $param_top_p4 = $top_p4;
            $param_top_p5 = $top_p5;
            $param_tabel1 = $tabel1;
            $param_table1_p = $table1_p;
            $param_table1_li1 = $table1_li1;
            $param_table1_li2 = $table1_li2;
            $param_table1_li3 = $table1_li3;
            $param_table1_li4 = $table1_li4;
            $param_table2 = $table2;
            $param_table2_p = $table2_p;
            $param_table2_li1 = $table2_li1;
            $param_table2_li2 = $table2_li2;
            $param_table2_li3 = $table2_li3;
            $param_table2_li4 = $table2_li4;
            $param_end_p = $end_p; 
            $param_photo1 = $photo;
            $param_photo2 = $pic;
            $param_photo3 = $got;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: projects.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
}
// Close connection
mysqli_close($link);
}
?>

<head>

    <title><?php echo $language["Authentication"]; ?> | اضافة مشروع جديد</title>

    <?php include 'layouts/head.php'; ?>

    <!-- twitter-bootstrap-wizard css -->
    <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">
    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "المشاريع";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">لحظة يا هندسة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                معلش !!! متأكد من المعلومات دي؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لحظة هراجع تاني</button>
                <button type="submit" class="btn btn-primary">ايوا متأكد</button>
            </div>
        </div>
    </div>
</div>
                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">اضافة محتوي المشروع الجديد</h4>
                            </div>
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="معلومات المشروع الاساسية">
                                                    1
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="1محتوي المشروع">
                                                    2
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="محتوي المشروع2">
                                                    3
                                                </div>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                    </div>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="text-center mb-4">
                                                <h5>معلومات المشروع الاساسية</h5>
                                                <p class="card-title-desc">اكمل المعلومات التالية</p>
                                            </div>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">اسم المشروع </label>
                                                            <input type="text" class="form-control" name="projname" id="projname" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">فئة المشروع</label>
                                                                <select class="form-select" name="service" id="service" aria-label="Default select example">
                                                                    <option selected>اختر من القائمة</option>
                                                                    <option value="all architect">التصميم المعماري</option>
                                                                    <option value="all interior">التصميم الداخلي</option>
                                                                    <option value="all outer">التصميم الخارجي</option>
                                                                    <option value="all structural">التصميم الإنشائي</option>
                                                                    <option value="all extra">التصميم الإلكتروميكانيكال</option>
                                                                </select>
                                                                <span class="text-danger"><?php echo$price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                 من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">موقع المشروع </label>
                                                            <input type="text" class="form-control" name="location" id="location" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input"> نوع الطراز المعماري</label>
                                                            <input type="text" class="form-control" name="engtype" id="engtype" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">فئة الخدمة</label>
                                                                <select class="form-select" name="engtype1" id="engtype1" aria-label="Default select example">
                                                                    <option selected>اختر من القائمة</option>
                                                                    <option value="التصميم المعماري">التصميم المعماري</option>
                                                                    <option value="التصميم الداخلي">التصميم الداخلي</option>
                                                                    <option value="التصميم الخارجي">التصميم الخارجي</option>
                                                                    <option value="التصميم الانشائي ">التصميم الإنشائي</option>
                                                                    <option value="التصميم الالكتروميكانيكال">التصميم الإلكتروميكانيكال</option>
                                                                    <option value="مخططات هندسية">مخططات هندسية</option>
                                                                </select>
                                                                <span class="text-danger"><?php echo$price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                    من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-lastname-input">مساحة المشروع</label>
                                                            <input type="text" class="form-control" name="distance" id="distance" placeholder="........">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                             من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input"> نوع المشروع</label>
                                                                <select class="form-select" name="type" id="type" aria-label="Default select example">
                                                                    <option selected>اختر من القائمة</option>
                                                                    <option value="تجاري"> تجاري</option>
                                                                    <option value="استثماري">استثماري</option>
                                                                    <option value="سكني">سكني</option>
                                                                </select>
                                                                <span class="text-danger"><?php echo$price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                    من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-lastname-input">تاريخ المشروع</label>
                                                            <input class="form-control" name="date" type="month" value="2019-08" id="example-month-input">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                             من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="formFileLg" class="form-label"> صورة رئيسية</label>
                                                        <input class="form-control form-control" required="true" name="photo" id="formFileLg" type="file">                                                                                     
                                                        <span class="text-danger"></span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="formFileLg" class="form-label">1 صورة فرعية</label>
                                                        <input class="form-control form-control" required="true" name="pic" id="formFileLg" type="file">                                                                                     
                                                        <span class="text-danger"></span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="formFileLg" class="form-label"> صورة فرعية2</label>
                                                        <input class="form-control form-control" required="true" name="got" id="formFileLg" type="file">                                                                                     
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>

                                                
                                           
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">التالي <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>محتوي المشروع1</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة علوية-1</label>
                                                                <input type="text" class="form-control" name="top_p1" id="top_p1">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة علوية-2</label>
                                                                <input type="text" name="top_p2" class="form-control" id="top_p2">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($top_p3_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة علوية-3</label>
                                                                <input type="text" name="top_p3" class="form-control" id="top_p3">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($top_p4_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة علوية-4</label>
                                                                <input type="text" name="top_p4" class="form-control" id="top_p4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($top_p5_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة علوية-5</label>
                                                                <input type="text" name="top_p5" class="form-control" id="top_p5">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($tabel1_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label"> عنوان الجدول-1</label>
                                                                <input type="text" name="tabel1" class="form-control" id="tabel1">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table1_p_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label"> جملة وصفية1</label>
                                                                <input type="text" name="table1_p" class="form-control" id="table1_p">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table1_li1_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول1</label>
                                                                <input type="text" name="table1_li1" class="form-control" id="table1_li1">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> السابق</a></li>
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">التالي <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-bank-detail">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>محتوي المشروع2</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table1_li2_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول1</label>
                                                                <input type="text" name="table1_li2" class="form-control" id="table1_li2">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table1_li3_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول1</label>
                                                                <input type="text" name="table1_li3" class="form-control" id="table1_li3">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table1_li4_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول1</label>
                                                                <input type="text" name="table1_li4" class="form-control" id="table1_li4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label"> عنوان الجدول2</label>
                                                                <input type="text" name="table2" class="form-control" id="table2">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_p_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label"> جملة وصفية2</label>
                                                                <input type="text" name="table2_p" class="form-control" id="table2_p">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_li1_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول2</label>
                                                                <input type="text" name="table2_li1" class="form-control" id="table2_li1">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_li2_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول2</label>
                                                                <input type="text" name="table2_li2" class="form-control" id="table2_li2">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_li3_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول2</label>
                                                                <input type="text" name="table2_li3" class="form-control" id="table2_li3">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_li4_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الجدول2</label>
                                                                <input type="text" name="table2_li4" class="form-control" id="table2_li4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($end_p_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label"> جملة ختامية</label>
                                                                <input type="text" name="end_p" class="form-control" id="end_p">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> السابق</a></li>
                                                    <li class="float-end"><!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            تطبيق
                                                            </button>

                                                            
                                                    </li>
                                                </ul>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <!-- Modal -->
                <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <div class="mb-3">
                                        <i class="bx bx-check-circle display-4 text-success"></i>
                                    </div>
                                    <h5>Confirm Save Changes</h5>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal" onclick="nextTab()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- twitter-bootstrap-wizard js -->
<script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

<!-- form wizard init -->
<script src="assets/js/pages/form-wizard.init.js"></script>

</body>

</html>