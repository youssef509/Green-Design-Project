<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; 

ob_start(); // Start output buffering
$do = isset($_GET['do']);
if ($do == 'Delete') {
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;                                           
    if ($id > 0) {
        $stmt = $link->prepare("DELETE FROM twitter WHERE id=$id");                                                                       
        $stmt->execute();
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    }
}
ob_end_flush(); // End output buffering and send content to browser

$flink = "";
$flink_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$flink =$_POST['flink'];
if (empty(trim($_POST["flink"]))) {
    $flink_err = "Please enter a URL.";
} elseif (!filter_var($_POST["flink"], FILTER_VALIDATE_URL)) {
    $flink_err = "Invalid URL format";
} else {
    // Prepare a select statement
    $sql = "SELECT id FROM twitter WHERE link = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_flink);

        // Set parameters
        $param_flink = trim($_POST["flink"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            /* store result */
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                $flink_err = "This URL is already taken.";
            } else {
                $flink = trim($_POST["flink"]);
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
}
if (empty($flink_err)) {
// Prepare an insert statement
$sql = "INSERT INTO twitter (id, link, author) VALUES (?, ?, '{$_SESSION["username"]}')";

if ($stmt = mysqli_prepare($link, $sql)) {
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ss",$id, $param_flink);

    // Set parameters
    $param_flink = $flink;
    

    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: twitter_link.php");
    } else {
        echo "Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
mysqli_close($link);}
}
?>
<head>

    <title>التحكم في رابط تويتر</title>

    <?php include 'layouts/head.php'; ?>
    <!-- datepicker css -->
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
                $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                $stmt = $link->prepare("SELECT * FROM twitter "); 
                $stmt ->execute();
                $resultSet = $stmt->get_result();
                $rows = $resultSet->fetch_all(MYSQLI_ASSOC);
                           
            ?>

<div class="contact-links-alert">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">                          
                    <h4 class="card-title">التحكم في رابط تويتر</h4>
                    <p>
                    <a class="btn btn-success" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">تنبيه!</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                يجب حذف الرابط القديم قبل اضافة الرابط الجديد
                            </div>
                            </div>
                        </div>
                    </div>
                    <form class="outer-repeater" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">                                   
                        <div class="form-group row mb-4 <?php echo (!empty($flink_err)) ? 'has-error' : ''; ?>">
                            <label for="input-email" class="col-form-label col-lg-2">الرابط</label>
                            <input type="text" class="form-control" name="flink" id="flink" placeholder=".......اكتب الرابط الجديد.......">
                            <span class="text-danger"><?php echo $flink_err; ?></span>
                            <div class="invalid-feedback">
                            Please Enter URL
                            </div>
                        </div>                                           
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">تطبيق</button>
                        </div>                                                                                                                                                                                                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                <!-- end row -->
                <?php
// Retrieve all records from the phone table
$result = mysqli_query($link, "SELECT * FROM twitter");

// Check if any rows were returned by the query
if (mysqli_num_rows($result) > 0) {
  // Loop through each record and display it
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $falink = $row['link'];
    $created_at = $row['created_at'];
    $author = $row['author'];
?>
<div class="modal fade" id="delete-twitter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">انت علي وشك الحذف!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                هل انت متأكد من الحذف؟
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <a type="button" href="twitter_link.php?do=Delete&id=<?php echo $id?>" class="btn btn-danger">تأكيد وحذف</a>
                </div>
        </div>
    </div>
</div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <div class="card text-center">
                <div class="card-header">
                 الرابط المستخدم
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-info btn-lg" href="<?php echo $falink ?>" target="_blank">عرض الرابط المستخدم</a>
                        <a type="button" href="twitter_link.php?do=Delete&id=<?php echo $id?>" class="btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#delete-twitter" data-bs-whatever="@mdo" data-id="<?php echo $id ?>" >حذف</a>
                    </div>
                </div>
                <p class="card-text">تمت الاضافة بواسطة: <?php echo $author ?></p>
                <div class="card-footer text-muted">
                  تاريخ الاضافة: <?php echo $created_at ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }
  // Free the result object
  mysqli_free_result($result);
} else {
  // No records found 
  $falink = 'لا يوجد ';
  $created_at = 'لا يوجد ';
  $author = 'لا يوجد ';
  ?>
 <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <div class="card text-center">
                <div class="card-header">
                 الرابط المستخدم
                </div>
                <div class="card-body">
                  <h5 class="card-title">الرابط المستخدم: <?php echo $falink ?></h5>
                  <p class="card-text">تمت الاضافة بواسطة: <?php echo $author ?></p>
                </div>
                <div class="card-footer text-muted">
                  <?php echo $created_at ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }
?>
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>
<!-- bootstrap datepicker -->
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- form repeater js -->
<script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>

<script src="assets/js/pages/task-create.init.js"></script>

</body>

</html>