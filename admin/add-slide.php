<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$text1 = $text2 = $text3  = "";
$text1_err = $text2_err = $text3_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text1 =$_POST['text1'];
        if (empty(trim($_POST["text1"]))) {
            $text1_err = "مينفعش تتساب فاضية يسطا";
        } else {
            // Prepare a select statement
            $sql = "SELECT id FROM slider WHERE text1 = ?";
        
            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_text1);
        
                // Set parameters
                $param_text1 = trim($_POST["text1"]);
        
                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
        
                    if (mysqli_stmt_num_rows($stmt) == 1000) {
                        $text1_err = "This URL is already taken.";
                    } else {
                        $text1 = trim($_POST["text1"]);
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
        
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        if (empty(trim($_POST["text2"]))) {
            $text2_err = "مينفعش تتساب فاضية يسطا";
        } else {
            // Prepare a select statement
            $sql = "SELECT id FROM slider WHERE text2 = ?";
        
            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_text2);
        
                // Set parameters
                $param_text2 = trim($_POST["text2"]);
        
                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
        
                    if (mysqli_stmt_num_rows($stmt) == 1000) {
                        $text2_err = "This URL is already taken.";
                    } else {
                        $text2 = trim($_POST["text2"]);
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
        
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        if (empty(trim($_POST["text3"]))) {
            $text3_err = "مينفعش تتساب فاضية يسطا";
        } else {
            // Prepare a select statement
            $sql = "SELECT id FROM slider WHERE text3 = ?";
        
            if ($stmt = mysqli_prepare($link, $sql)) {
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_text3);
        
                // Set parameters
                $param_text3 = trim($_POST["text3"]);
        
                // Attempt to execute the prepared statement
                if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
        
                    if (mysqli_stmt_num_rows($stmt) == 1000) {
                        $text2_err = "This URL is already taken.";
                    } else {
                        $text3 = trim($_POST["text3"]);
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
        
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

        
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
       move_uploaded_file($tmp,"..\uploads\slider\\" . $photo);
       
    }

    // Check input errors before inserting in database
    if (empty($price_err) && empty($data1_err) && empty($formErrors)){

        // Prepare an insert statement
        $sql = "INSERT INTO slider (text1, text2, text3, photo) VALUES (?,?,?,?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss",$param_text1, $param_text2, $param_text3, $param_photo);

            // Set parameters
            $param_text1 = $text1;
            $param_text2 = $text2;
            $param_text3 = $text3; 
            $param_photo = $photo;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: slider.php");
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

    <title><?php echo $language["Slide"]; ?> | اضافة  </title>

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
                $maintitle = "المقالات";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slider</h4>
                                <p class="card-title-desc">اضافة صورة جديدة
                                </p>
                            </div>
                            <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                <label for="progresspill-firstname-input"> نص عادي</label>
                                                <input type="text" class="form-control" required="true" name="text1" id="text1" placeholder="............">
                                                <span class="text-danger"></span>
                                                <div class="invalid-feedback">
                                                من فضلك ادخل البيانات المطلوبة
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                <label for="progresspill-firstname-input"> نص ملون</label>
                                                <input type="text" class="form-control" required="true" name="text2" id="text2" placeholder="............">
                                                <span class="text-danger"></span>
                                                <div class="invalid-feedback">
                                                من فضلك ادخل البيانات المطلوبة
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                <label for="progresspill-firstname-input">جملة وصفية</label>
                                                <input type="text" class="form-control" required="true" name="text3" id="text3" placeholder="............">
                                                <span class="text-danger"></span>
                                                <div class="invalid-feedback">
                                                من فضلك ادخل البيانات المطلوبة
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="formFileLg" class="form-label">اختر صورة</label>
                                            <input class="form-control form-control" required="true" name="photo" id="formFileLg" type="file">                                                                                     
                                            <span class="text-danger"></span>
                                        </div>                                 
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">تطبيق</button>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
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
                                    </div>
                            </form>       
                        </div>
                        <div class="card">
                            
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                

                

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