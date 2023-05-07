<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>

    <title><?php echo $language["Wizard"]; ?> | Dason - Admin & Dashboard Template</title>

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
                $maintitle = "Forms";
                $title = "Form Wizard";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <?php
                    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    $stmt = $link->prepare("SELECT * FROM shop "); 
                    $stmt ->execute();
                    $resultSet = $stmt->get_result();
                    $rows = $resultSet->fetch_all(MYSQLI_ASSOC);                           
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جدول قائمة الباقات المتواجدة في المتجر</h4>
                                
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th></th>
                                                <th>فئة الباقة</th>
                                                <th></th>
                                                <th>رقم الباقة</th>                                               
                                                <th></th>
                                                <th>السعر</th>
                                                <th></th>
                                                <th>اجراء</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php
                                                    foreach($rows as $row) {
                                                        echo "<tr data-id='1'>";
                                                            echo "<td style='width: 80px'>" . $row['id'] . "<td>";
                                                            echo "<td>" . $row['category'] . "<td>";
                                                            echo "<td>" . $row['number_of_category'] . "<td>";
                                                            echo "<td>" . $row['price'] . "<td>";                   
                                                            echo "<td>
                                                                    <a href='shop_cards.php?do=Delete&id=" . $row['id'] . "' class='btn btn-danger confirm' > حذف </a>";                                                                    
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
                                             $stmt = $link->prepare("DELETE FROM shop WHERE id=$id");                                                                       
                                             $stmt->execute();
                                             echo "<div class='alert alert-success' text='center'>  تم حذف الباقة بنجاح</div>";
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
<!-- twitter-bootstrap-wizard js -->
<script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>

<!-- form wizard init -->
<script src="assets/js/pages/form-wizard.init.js"></script>

</body>

</html>