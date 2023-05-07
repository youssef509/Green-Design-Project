<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>

    <title><?php echo $language["Authentication"]; ?> </title>

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
                $maintitle = "المشاريع";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <?php
                    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    $stmt = $link->prepare("SELECT * FROM projects "); 
                    $stmt ->execute();
                    $resultSet = $stmt->get_result();
                    $rows = $resultSet->fetch_all(MYSQLI_ASSOC);                           
                ?>
                <!-- end page title -->
                
                <div class="card text-center">
                    <div class="card-header">
                           المشاريع
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">اضافة مشروع جديد</h5>
                        <p class="card-text"></p>
                        <a href="project_create.php" class="btn btn-primary">انشاء</a>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جدول قائمة المشاريع</h4>
                                
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th></th>
                                                <th>اسم المشروع</th>
                                                <th></th>                                               
                                                <th>فئة المشروع</th>                                                                                           
                                                <th></th>                                               
                                                <th>اجراء</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    
                               
                                    <div class="row">
                                        <?php foreach($rows as $row) {?> 
                                            <div class="col-lg-4">
                                                    <div class="card">
                                                        <!-- <img class="card-img-top img-fluid" src="../uploads/projects/<?php echo $row['photo1'] ?>" alt="Card image cap"> -->
                                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid mx-auto" src="assets/images/small/img-4.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="assets/images/small/img-5.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="assets/images/small/img-6.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- end carousel -->
                                                        <div class="card-body">
                                                            
                                                            <h4 class="card-title"><?php echo $row['projectname'] ?></h4>
                                                            <p class="card-text">فئة الخدمة: <?php echo $row['engtype1'] ?></p>
                                                            <p class="card-text">الموقع: <?php echo $row['location'] ?></p>
                                                            <p class="card-text">
                                                                <small class="text-muted">تمت الاضافة: <?php echo $row['created_at'] ?></small>
                                                            </p>
                                                            <a href="javascript: void(0);" class="btn btn-success waves-effect waves-light">تعديل</a>
                                                            <a href="javascript: void(0);" class="btn btn-danger waves-effect waves-light">حذف</a>
                                                        </div>
                                                    </div>
                                            </div><!-- end col --><?php }?>
                                    </div><!-- end row -->
                                
                            
                </div> <!-- end row -->
                                        <?php $do = isset($_GET['do']);
                                            if ($do == 'Delete') {
                                             $id = isset($_GET['id']);
                                             $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;                                           
                                             if ($id > 0) {
                                             $stmt = $link->prepare("DELETE FROM projects WHERE id=$id");                                                                       
                                             $stmt->execute();                                  
                                             echo "<div class='alert alert-success' text='center'>  تم حذف المشروع بنجاح</div>";
                                             
                                             }};
                                          ?>


           
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