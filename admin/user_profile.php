<?php 
  include 'layouts/session.php';
  include 'layouts/head-main.php'; 
  $id = $_SESSION["id"];
ob_start(); // Start output buffering
$do = isset($_GET['do']);
if ($do == 'Delete') {
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;                                           
    if ($id > 0) {
        $stmt = $link->prepare("UPDATE idusers SET profileimg = '' WHERE id=$id");                                                                       
        $stmt->execute();
        header("Location: $_SERVER[PHP_SELF]");
        exit();
    }
}
ob_end_flush(); // End output buffering and send content to browser
$photo = "";
$photo_err =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit1'])) {
    // Upload Variables
    $photoname = $_FILES['photo']['name'];
    $photosize = $_FILES['photo']['size'];
    $tmp  = $_FILES['photo']['tmp_name'];
    $phototype = $_FILES['photo']['type'];
    // List Of Allowed File Type to Upload
    $photoAllowedExtension = array('jpeg','webp','png','jpg');
    // Get Photo Extension
    $photoExtension = substr( strrchr($photoname, '.'), 1);
       if(! empty($photoname) && ! in_array($photoExtension , $photoAllowedExtension )){
        $formErrors[] = 'الصيغة بتاعت الصورة مش مناسبة';
    }
    if (empty ($formErrors)) {
        $photo = rand(0,100000) . '_' . $photoname;
       move_uploaded_file($tmp,"../uploads/admin_profile//" . $photo);
    }
    // Prepare an insert statement
    $sql = "UPDATE idusers SET profileimg=? WHERE id = $id";
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_photo);

        // Set parameters
        $param_photo = $photo;
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
           // Set a success message
           $_SESSION['record_updated'] = true;
              
           // Redirect to the current page to prevent resubmission
           header('Location: ' . $_SERVER['REQUEST_URI']);
           exit;
        } else {
            // Set an error message
            $_SESSION['record_updated_err'] = true;

            // Redirect to the current page to prevent resubmission
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
}


$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$stmt = $link->prepare("SELECT * FROM idusers WHERE id = $id "); 
$stmt ->execute();
$resultSet = $stmt->get_result();
$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
foreach($rows as $row) { 
    $usr_name = $row['name'];
    $usr_email = $row['useremail'];
    $usr_username = $row['username'];
    $usr_linkedin = $row['linkedin_profile'];
    $usr_last_login = $row['last_login'];
    $usr_created_at = $row['created_at'];
    $usr_ar_name = $row['ar_name'];
    $usr_bio = $row['bio'];
    if($row['role'] == 1) {
      $usr_role = "مسئول";
    } else {
      $usr_role = "محرر";
    }
    if(empty($row['profileimg'])) { 
      $usr_img = 'defult.jpg' ;
    } else {
      $usr_img = $row['profileimg'];}

      if (empty($row['linkedin_profile']) || empty($row['ar_name']) || strlen($row['bio']) < 12 ) {
        $blog_acc = "notverified";
    } else {
        $blog_acc = "verified";
    }

      }
    

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit2'])) {
        // Get the values from the form
        $field1 = isset($_POST['field1']) && !empty($_POST['field1']) ? $_POST['field1'] : $usr_name;
        $field2 = isset($_POST['field2']) && !empty($_POST['field2']) ? $_POST['field2'] : $usr_email;
        $field3 = isset($_POST['field3']) && !empty($_POST['field3']) ? $_POST['field3'] : $usr_username;
        $field4 = isset($_POST['field4']) && !empty($_POST['field4']) ? $_POST['field4'] : $usr_linkedin;
        $field5 = isset($_POST['field5']) && !empty($_POST['field5']) ? $_POST['field5'] : $usr_ar_name;
        $field6 = isset($_POST['field6']) && !empty($_POST['field6']) ? $_POST['field6'] : $usr_bio;
        // Construct the SQL query
        $sql = "UPDATE idusers SET name = ?, useremail = ?, username = ?, linkedin_profile = ?, ar_name = ?, bio = ? WHERE id = $id";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_field1, $param_field2, $param_field3, $param_field4, $param_field5, $param_field6);
            // Set parameters
            $param_field1 = $field1;
            $param_field2 = $field2;
            $param_field3 = $field3;
            $param_field4 = $field4;
            $param_field5 = $field5;
            $param_field6 = $field6;
            if (mysqli_stmt_execute($stmt)) {
              // Set a success message
              $_SESSION['record_updated'] = true;
              
              // Redirect to the current page to prevent resubmission
              header('Location: ' . $_SERVER['REQUEST_URI']);
              exit;
          } else {
              // Set an error message
              $_SESSION['record_updated_err'] = true;

              // Redirect to the current page to prevent resubmission
              header('Location: ' . $_SERVER['REQUEST_URI']);
              exit;
          }
          
          // Close statement
          mysqli_stmt_close($stmt);
        } }
          

// Define variables and initialize with empty values
$current_password = $new_password = $confirm_password = "";
$current_password_err = $new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit3'])) {
    
    // Validate current password
    if (empty(trim($_POST["current_password"]))) {
        $current_password_err = "من فضلك ادخل كلمة المرور الحالية";
    } else {
        $current_password = trim($_POST["current_password"]);
    }
    
    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "من فضلك ادخل كلمة المرور الجديدة";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "يجب ان تتكون كلمة المرور الجديدة من 6 احرف او ارقام علي الاقل";
    } else {
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "من فضلك فم بأكيد كلمة المرور";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "كلمة المرور غير متطابقة";
        }
    }

    // Check input errors before updating the database
if (empty($current_password_err) && empty($new_password_err) && empty($confirm_password_err)) {
    
    // Prepare a select statement to check the current password
    $sql = "SELECT password FROM idusers WHERE id = ?";
    
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = $_SESSION["id"];
        
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if current password exists, if yes then verify it
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($current_password, $hashed_password)) {
                        // Prepare an update statement
                        $sql = "UPDATE idusers SET password = ? WHERE id = ?";
                        
                        if ($stmt = mysqli_prepare($link, $sql)) {
                            // Bind variables to the prepared statement as parameters
                            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                            
                            // Set parameters
                            $param_password = password_hash($new_password, PASSWORD_DEFAULT); // Creates a password hash
                            
                            // Attempt to execute the prepared statement
                            if (mysqli_stmt_execute($stmt)) {
                                // Password updated successfully. Set a success message, and redirect to login page
                                $_SESSION['pass_record_updated'] = true;
                                    
                                // Redirect to the current page to prevent resubmission
                                header('Location: ' . $_SERVER['REQUEST_URI']);
                                exit;
                            } else {
                                echo "Oops! Something went wrong. Please try again later.";
                            }
                            // Close statement
                            mysqli_stmt_close($stmt);
                        }
                    } else {
                        $current_password_err = "كلمة المرور الحالية غير صحيحة";
                    }
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
}
}
// Close connection
mysqli_close($link);
?>
<head>
  <title>تعديل الملف الشخصي</title>
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
                    <div class="col-lg-12">
                        <div class="row justify-content-center mt-3">
                            <div class="col-xl-5 col-lg-8">
                                  <div class="text-center">
                                      <div class="row justify-content-center mt-3">
                                          <div>
                                            <img class="rounded auto" alt="200x200" style="max-width: 200px;" src="../uploads/admin_profile/<?php echo $usr_img ?>" data-holder-rendered="true">
                                          </div>
                                              <div class="ch-ed-btn">
                                                  <div class="modal fade" id="profileimg" tabindex="-1" aria-labelledby="photoupload" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                          <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="photoupload">صورة الملف الشخصي</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                                                  <div class="input-group mb-3">
                                                                      <input type="file" name="photo" class="form-control" id="inputGroupFile02" required>
                                                                      <label class="input-group-text" for="inputGroupFile02">اختيار صورة</label>
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
                                                
                                                      <div class="modal fade" id="dprofileimg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                  <a type="button" href="user_profile.php?do=Delete&id=<?php echo $id?>" class="btn btn-danger">تأكيد وحذف</a>
                                                              </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                              </div>
                                      </div>
                                        <div>
                                        <button type="button" class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#profileimg" data-bs-whatever="@mdo">تغيير</button>
                                        <button type="button" href="user_profile.php?do=Delete&id=<?php echo $id?>" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#dprofileimg" data-bs-whatever="@mdo">حذف</button>
                                        </div>
                                  </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row mt-5">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">1</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">الاسم</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" name="field1" placeholder="Enter value" value="<?php echo $usr_name; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">2</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">البريد الالكتروني</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                  <input type="text" class="form-control" name="field2" placeholder="Enter value" value="<?php echo $usr_email; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">3</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">اسم المستخدم</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                  <input type="text" class="form-control" name="field3"  value="<?php echo $usr_username; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">4</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">رابط لينكدان</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                  <input type="text" class="form-control" name="field4" placeholder="لايوجد رابط حساب لينكدان" value="<?php echo $usr_linkedin; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">5</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">الاسم بـ العربية</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                  <input type="text" class="form-control" name="field5"  value="<?php echo $usr_ar_name; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">6</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">نبذة عني</h5>
                                                <form method="POST">
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" name="field6" placeholder="Enter value" value="<?php echo $usr_bio; ?>" disabled>
                                                    <button class="btn btn-outline-secondary" type="button" id="enableInput">تعديل</button>
                                                  </div>
                                                  <button type="submit" name="submit2" value="Submit Form 2" class="btn btn-primary mt-2">تأكيد</button>
                                                </form>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">7</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">الدور</h5>
                                                  <div class="input-group">
                                                  <input type="text" value="<?php echo $usr_role;?>" class="form-control" disabled>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">8</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">تاريخ الانضمام</h5>
                                                  <div class="input-group">
                                                  <input type="text" value="<?php echo $usr_created_at?>" class="form-control" disabled>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                      <div class="card-body overflow-hidden position-relative">
                                          <div class="d-flex">
                                              <div class="faq-count">
                                                  <div class="avatar-sm m-auto">
                                                      <span class="avatar-title rounded-circle bg-primary text-white font-size-16">9</span>
                                                  </div>
                                              </div>
                                              <div class="flex-1 ms-3">
                                                <h5 class="card-title">اخر تسجيل دخول</h5>
                                                  <div class="input-group">
                                                  <input type="text" value="<?php echo $usr_last_login?>" class="form-control" disabled>
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
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            <div class="row">  
                <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">تغيير كلمة المرور</h4>
                                <p class="card-title-desc">يمكنك تغيير كلمة المرور عن طريق ادخال كلمةالمرور الحالية وادخال كلمة مرور جديدة وتأكيدها مرة اخري</p>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">كلمةالمرور الحالية</label>
                                                <input type="password" class="form-control" name="current_password" id="validationCustom01" placeholder="ادخل كلمة المرور الحالية">
                                                <span class="text-danger">
                                                    <?php echo $current_password_err ?>
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom03">كلمة المرور الجديدة</label>
                                                <input type="password" class="form-control" name="new_password" id="validationCustom03" placeholder="ادخل كلمة المرور الجديدة">
                                                <span class="text-danger">
                                                    <?php echo $new_password_err ?>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom04">تأكيد كلمة المرور الجديدة</label>
                                                <input type="password" class="form-control" name="confirm_password" id="validationCustom04" placeholder="تأكيد كلمة المرور الجديدة">
                                                <span class="text-danger">
                                                    <?php echo $confirm_password_err ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" name="submit3" value="Submit Form 3" type="submit">تطبيق</button>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
              </div> <!-- end col -->
              <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">حساب اضافة المقالات</h4>
                                <p class="card-title-desc">لتفعيل ميزة اضافة المقالات اعتمادا علي بياناتك الشخصية يرجي اضافة رابط حسابك في لينكدان والاسم بالعربية والنبذة المختصرة ولاتنسي اضافة الصورة الشخصية</p>
                            </div>
                            <div class="card-body">
                                <h5>حالة الحساب:</h5>
                                <?php 
                                    if ($blog_acc == 'verified') {
                                        echo '<div class="card bg-success border-success text-white-50">
                                        <div class="card-body">
                                            <h5 class="mb-3 text-white">حساب موثق</h5>
                                            <h5 class="mb-3 text-white">يمكنك الان استخدام ميزة اضافة المقالات عن طريق بياناتك الشخصية المأخوذة من ملفك الشخصي</h5>
                                        </div>
                                      </div>';
                                    } elseif ($blog_acc == 'notverified') {
                                        echo '<div class="card bg-warning border-warning text-white-50">
                                        <div class="card-body">
                                            <h5 class="mb-3 text-white">حساب غير موثق</h5>
                                            <h5 class="mb-3 text-white">لتفعيل هذه الميزة برجاء اضافة رابط حسابك في لينكدان والاسم بالعربية والنبذة المختصرة</h5>
                                        </div>
                                      </div>';
                                    } else {
                                        echo '<div class="card bg-danger border-danger text-white-50">
                                        <div class="card-body">
                                            <h5 class="mb-3 text-white">خطأ برمجي</h5>
                                            <h5 class="mb-3 text-white">حدث خطأ في معالجة البيانات برجاء التواصل مع المطور لحل المشكلة. رقم الخطأ 302</h5>
                                        </div>
                                      </div>';
                                    }
                                ?>
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
              </div>            
      </div> 
      
                </div><!-- end row-->
     </div>
        <?php include 'layouts/footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Check if the record_updated session variable has been set
    <?php if(isset($_SESSION['record_updated']) && $_SESSION['record_updated']) : ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'تم تحديث المعلومات بنجاح',
            showConfirmButton: false,
            timer: 2500
        });
        
        // Unset the session variable so the alert won't be shown again
        <?php unset($_SESSION['record_updated']); ?>
    <?php endif; ?>
</script>
<?php
if (isset($_SESSION['pass_record_updated']) && $_SESSION['pass_record_updated']) {
    // Unset the session variable to prevent the message from appearing again after the redirect
    unset($_SESSION['pass_record_updated']);
?>
    <script>
        // Display the success message
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'تم تحديث المعلومات بنجاح',
            html: 'سيتم تحويلك إلى صفحة تسجيل الدخول في <strong><span id="timer"></span></strong> ثوانٍ.',
            timer: 5000,
            timerProgressBar: true,
            didOpen: () => {
                let timeLeft = 5;
                const timer = document.getElementById('timer');
                timer.innerText = timeLeft;
                const timerInterval = setInterval(() => {
                    timeLeft--;
                    timer.innerText = timeLeft;
                    if (timeLeft == 0) {
                        clearInterval(timerInterval);
                        window.location.href = 'logout.php';
                    }
                }, 1000);
            }
        });
    </script>
<?php
}
?>
<script>
    // Check if the record_updated session variable has been set
    <?php if(isset($_SESSION['record_updated_err']) && $_SESSION['record_updated_err']) : ?>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'لقد حدث خطأ',
            showConfirmButton: false,
            timer: 2500
        });
        
        // Unset the session variable so the alert won't be shown again
        <?php unset($_SESSION['record_updated_err']); ?>
    <?php endif; ?>
</script>
<?php include 'layouts/vendor-scripts.php'; ?>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweetalert.init.js"></script>
<script src="assets/libs/masonry-layout/masonry.pkgd.min.js"></script>
</body>
</html>