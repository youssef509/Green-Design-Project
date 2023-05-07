<?php include 'layouts/session.php';
include 'layouts/config.php';
include 'layouts/head-main.php'; 
$user_id = $_SESSION["id"];
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Retrieve the column value and assign it to a variable
$stmt = $link->prepare("SELECT role FROM idusers WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $permission = $row["role"];
};
ob_start(); // Start output buffering
$do = isset($_GET['do']);
if ($do == 'Delete') {
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;                                           
    if ($id > 0) {
        $stmt = $link->prepare("DELETE FROM idusers WHERE id = $id");                                                                       
        $stmt->execute();
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    }
}
ob_end_flush(); // End output buffering and send content to browser
?>
<head>
    <title> قائمة المستخدمين </title>
    <?php include("layouts/head.php") ?>
  <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <?php include("layouts/head-style.php") ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php include("layouts/body.php")?>
<div id="layouts-wrapper">
  <?php include("layouts/menu.php") ?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <?php 
          $maintitle = "Welcome";
          include("layouts/breadcrumb.php");
        ?>
      </div>
                    <div class="row">
                        <?php 
                        if ($permission == 'admin') {
                        // Retrieve all users from the users table
                            $result = mysqli_query($link, "SELECT * FROM idusers");
                            // Loop through each record and display it
                            while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $username = $row['username'];
                            $useremail = $row['useremail'];
                            $created_at = $row['created_at'];
                            if($row['role'] == 'admin') {
                                $role = "مسئول";
                            }else{
                                $role = "محرر";
                            }
                            if(empty($row['profileimg'])) {
                                $userimg = "defult.jpg";
                            }else{
                                $userimg = $row['profileimg'];
                            }
                            if(empty($row['ar_name'])) {
                                $name = $row['name'];
                            }else {
                                $name = $row['ar_name'];
                            }
                      ?>
                      
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="../uploads/admin_profile/<?php echo $userimg ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h5 class="font-size-15 mb-1"><a href="#" class="text-dark"><?php echo $name ?></a></h5>
                                            <p class="text-muted mb-0"><?php echo $role ?></p>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-1">
                                        <p class="text-muted mb-0 mt-2"><span class="font-size-15 mb-1">اسم المستخدم: </span><?php echo $username ?></p>
                                        <p class="text-muted mb-0 mt-2"><span class="font-size-15 mb-1"> البريد: </span><?php echo $useremail ?></p>
                                        <p class="text-muted mb-0 mt-2"><span class="font-size-15 mb-1">تاريخ الانضمام: </span><?php echo $created_at ?></p>
                                    </div>
                                </div>

                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#change-role" data-bs-whatever="@mdo" data-id="<?php echo $id ?>" >تغيير الدور</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light delete-btn" data-bs-toggle="modal" data-bs-target="#delete-user" data-bs-whatever="@mdo" data-id="<?php echo $id ?>">حذف</button>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="text-center">
                                                  <div class="modal fade" id="change-role" tabindex="-1" aria-labelledby="photoupload" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="photoupload">تغيير الدور</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                                                <div class="mb-3">
                                                                        <select class="form-select">
                                                                            <option>اختر الدور</option>
                                                                            <option>مسئول</option>
                                                                            <option>محرر</option>
                                                                        </select>
                                                                    </div>
                                                                  <div class="modal-footer">
                                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                                                                      <button type="submit" name="submit1" value="Submit Form 1" class="btn btn-primary">تطبيق</button>
                                                                  </div>
                                                              </form>
                                                          </div>
                                                          
                                                          </div>
                                                      </div>
                                                  </div>
                                                 <div class="modal fade" id="delete-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                <a type="button" href="members.php?do=Delete&id=<?php echo $row['id']?>" class="btn btn-danger">تأكيد وحذف</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                                 </div>
                                  </div>
                        </div> 
                        <?php }?>
                        <!-- end col -->
                    </div>
                    <!-- end row-->
                    <?php
    }elseif ($permission == 'editor') {
        echo '
<div class="text-center mb-5 pt-5">
    <h1 class="error-title mt-5"><span>403!</span></h1>
    <h4 class="text-uppercase mt-5">ليس لديك الصلاحية للدخول الي هذه الصفحة</h4>
    <p class="font-size-15 mx-auto text-muted w-50 mt-4">يجب ان يكون لديك الدور من نوع مسئول لكي تتمكن من الدخول لهذه الصفحة.</p>
</div>';
    }
    ?>
            </div>


        <?php include 'layouts/footer.php'; ?>
    </div> 
    
</div>
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>

</body>
</html>