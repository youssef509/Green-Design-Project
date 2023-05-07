<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>

    <title><?php echo $language["Blogs"]; ?> </title>

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
                $maintitle = "المقالات";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <?php
                    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    $stmt = $link->prepare("SELECT * FROM blog "); 
                    $stmt ->execute();
                    $resultSet = $stmt->get_result();
                    $rows = $resultSet->fetch_all(MYSQLI_ASSOC);                           
                ?>
                <!-- end page title -->
                
                <div class="card text-center">
                    <div class="card-header">
                           المقالات
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">اضافة مقالة جديدة</h5>
                        <p class="card-text"></p>
                        <a href="create-blog.php" class="btn btn-primary">اضافة</a>
                    </div>                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جدول قائمة المقالات</h4>                               
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th></th>
                                                <th>عنوان المقالة</th>
                                                <th></th>                                               
                                                <th> الكاتب</th>                                                                                           
                                                <th></th>                                               
                                                <th>اجراء</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php
                                                    foreach($rows as $row) {
                                                        echo "<tr data-id='1'>";
                                                            echo "<td style='width: 80px'>" . $row['id'] . "<td>";
                                                            echo "<td>" . $row['title'] . "<td>";
                                                            echo "<td>" . $row['author'] . "<td>";                                                                             
                                                            echo "<td>
                                                                    <a href='blog.php?do=Delete&id=" . $row['id'] . "' class='btn btn-danger confirm' > حذف </a>";                                                                    
                                                                echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                                        <?php $do = isset($_GET['do']);
                                            if ($do == 'Delete') {
                                             $id = isset($_GET['id']);
                                             $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;                                           
                                             if ($id > 0) {
                                             $stmt = $link->prepare("DELETE FROM blog WHERE id=$id");                                                                       
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