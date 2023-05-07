<?php include 'layouts/session.php';?>
<?php include 'layouts/head-main.php'; ?>
<head>
    <title>لوحة التحكم</title>
    <?php include 'layouts/head.php'; ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-style.php'; ?>
</head>
<?php include 'layouts/body.php'; ?>
<div id="layout-wrapper">
    <?php include 'layouts/menu.php'; ?>
    <div class="main-content">
        <div class="page-content">
     <div class="container-fluid">
                <?php
                $maintitle = "مرحبا";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>

        <?php 
            $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
            // Get Number of Projects           
            $projcount = $link->prepare("SELECT COUNT(id) FROM projects");
            $projcount->execute();
            $proj_count=$projcount->get_result()->fetch_row()[0];
            // Get Number of Blogs           
            $blogcount = $link->prepare("SELECT COUNT(id) FROM blog");
            $blogcount->execute();
            $blog_count=$blogcount->get_result()->fetch_row()[0];
            // Get Number of Shop
            $shopcount = $link->prepare("SELECT COUNT(id) FROM shop");
            $shopcount->execute();
            $shop_count=$shopcount->get_result()->fetch_row()[0];
        ?>
     
        </div>
        <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-primary border-primary text-white-50">
                            <div class="card-body">
                                <h4 class="mb-3 text-white">المشاريع</h4>
                                <div class="card-text"><p class="card-text text-white text-center"><?php echo $proj_count; ?></p></div>
                                <i class="fa-solid fa-building-user"></i>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-primary border-primary text-white-50">
                            <div class="card-body">
                                <h4 class="mb-3 text-white">المقالات</h4>
                                <div class="card-text" ><p class="card-text text-white text-center"><?php echo $blog_count; ?></p></div>
                                <i class="fa-solid fa-file-pen"></i>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-primary border-primary text-white-50">
                            <div class="card-body">
                                <h4 class="mb-3 text-white">المتجر</h4>
                                <div class="card-text" ><p class="card-text text-white text-center"><?php echo $shop_count; ?></p></div>
                                <i class="fa-solid fa-cart-shopping"></i>  
                            </div>
                        </div>
                    </div>
<?php 
// Execute the SQL query
$result = mysqli_query($link, "SELECT * FROM projects ORDER BY id DESC LIMIT 1");

// Check if any rows were returned by the query
if (mysqli_num_rows($result) > 0) {
   // Retrieve the data from the result object
   $row = mysqli_fetch_assoc($result);
  // Collect the records from the table
  $projectname = $row['projectname'];
  $created_at = $row['created_at'];
  $author = $row['author'];
  // Free the result object
  mysqli_free_result($result);
} else {
  // Define all variables with empty values
  $projectname = "لا يوجد مشاريع";
  $created_at = 'لا يوجد';
  $author = 'لا يوجد';
  // Free the result object
  mysqli_free_result($result);
}
?>
                    <div class="col-lg-4">
                        <div class="border rounded p-4">                           
                            <h4 class="card-title mb-4">المضاف حديثا</h4>
                            <div id="task-1">
                                <div id="upcoming-task" class="pb-1 task-list">
                                    <div class="card task-box" id="uptask-1">
                                        <div class="card-body">                                           
                                            <div class="card task-box" id="cmptask-2">
                                                <div class="card-body">                                           
                                                    <div class="float-end ms-2">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12" id="task-status">نشط</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-14"><a href="javascript: void(0);" class="text-dark" id="task-name"><?php echo $projectname ?></a></h5>
                                                        <p class="text-muted"><?php echo $created_at ?></p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="font-size-15 mb-1">تمت الاضافة بواسطة:</p>
                                                        <h5 class="mb-0 text-muted" id="task-budget"><?php echo $author?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="text-center d-grid">
                                    <a href="projects.php" class="btn btn-primary waves-effect waves-light addtask-btn"><i class="mdi mdi-plus me-1"></i>اجراءات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
// Execute the SQL query
$result = mysqli_query($link, "SELECT * FROM blog ORDER BY id DESC LIMIT 1");

// Check if any rows were returned by the query
if (mysqli_num_rows($result) > 0) {
  // Retrieve the data from the result object
  $row = mysqli_fetch_assoc($result);
  // Collect the records from the table
  $title_name = $row['title'];
  $Bcreated_at = $row['created_at'];
  $Bauthor = $row['author_f'];
  // Free the result object
  mysqli_free_result($result);
} else {
  // Define variables with default values
  $title_name = "لا يوجد مقالات";
  $Bcreated_at = 'لا يوجد';
  $Bauthor = 'لا يوجد';
  // Free the result object
  mysqli_free_result($result);
}
?>

                    <div class="col-lg-4">
                        <div class="border rounded p-4">                           
                            <h4 class="card-title mb-4">المضاف حديثا</h4>
                            <div id="task-1">
                                <div id="upcoming-task" class="pb-1 task-list">
                                    <div class="card task-box" id="uptask-1">
                                        <div class="card-body">                                           
                                            <div class="card task-box" id="cmptask-2">
                                                <div class="card-body">                                           
                                                    <div class="float-end ms-2">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12" id="task-status">نشط</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-14"><a href="javascript: void(0);" class="text-dark" id="task-name"><?php echo $title_name ?></a></h5>
                                                        <p class="text-muted"><?php echo $Bcreated_at ?></p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="font-size-15 mb-1">تمت الاضافة بواسطة:</p>
                                                        <h5 class="mb-0 text-muted" id="task-budget"><?php echo $Bauthor?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="text-center d-grid">
                                <a href="blog.php" class="btn btn-primary waves-effect waves-light addtask-btn"><i class="mdi mdi-plus me-1"></i>اجراءات</a>
                                </div>
                            </div>
                        </div>
                    </div>
<?php 
// Execute the SQL query
$result = mysqli_query($link, "SELECT * FROM shop ORDER BY id DESC LIMIT 1");

// Check if any rows were returned by the query
if (mysqli_num_rows($result) > 0) {
   // Retrieve the data from the result object
   $row = mysqli_fetch_assoc($result);
  // Collect the records from the table
  $category = $row['category'];
  $number_of_category = $row['number_of_category'];
  $screated_at = $row['created_at'];
  $sauthor = $row['author'];
  // Free the result object
  mysqli_free_result($result);
} else {
  // Define all variables with empty values
  $category = "لا يوجد عناصر";
  $screated_at = 'لا يوجد';
  $sauthor = 'لا يوجد';
  // Free the result object
  mysqli_free_result($result);
}
?>
                    <div class="col-lg-4">
                        <div class="border rounded p-4">                           
                            <h4 class="card-title mb-4">المضاف حديثا</h4>
                            <div id="task-1">
                                <div id="upcoming-task" class="pb-1 task-list">
                                    <div class="card task-box" id="uptask-1">
                                        <div class="card-body">                                           
                                            <div class="card task-box" id="cmptask-2">
                                                <div class="card-body">                                           
                                                    <div class="float-end ms-2">
                                                        <span class="badge rounded-pill badge-soft-success font-size-12" id="task-status">نشط</span>
                                                    </div>
                                                    <div>
                                                        <h5 class="font-size-14"><a href="javascript: void(0);" class="text-dark" id="task-name"><?php echo $category; echo '-';  echo $number_of_category ?></a></h5>
                                                        <p class="text-muted"><?php echo $screated_at ?></p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="font-size-15 mb-1">تمت الاضافة بواسطة:</p>
                                                        <h5 class="mb-0 text-muted" id="task-budget"><?php echo $sauthor?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="text-center d-grid">
                                <a href="shop.php" class="btn btn-primary waves-effect waves-light addtask-btn"><i class="mdi mdi-plus me-1"></i>اجراءات</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                
                
                
                
                
                
                
                </div><!-- end row-->
     </div>




        <?php include 'layouts/footer.php'; ?>
    </div>
</div>
<?php include 'layouts/right-sidebar.php'; ?>
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
</body>
</html>