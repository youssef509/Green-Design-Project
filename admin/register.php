<?php 
require_once "layouts/session.php";
include("layouts/config.php");
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
// Define variables and initialize with empty values
$useremail = $username =  $password = $confirm_password = $name = $role = "";
$useremail_err = $username_err = $password_err = $confirm_password_err = $name_err = $role_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate useremail
    if (empty(trim($_POST["useremail"]))) {
        $useremail_err = "Please enter a useremail.";
    } elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)) {
        $useremail_err = "Invalid email format";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM idusers WHERE useremail = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);

            // Set parameters
            $param_useremail = trim($_POST["useremail"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $useremail_err = "This useremail is already taken.";
                } else {
                    $useremail = trim($_POST["useremail"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM idusers WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please enter a confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }
    // Validate membername
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter a name.";
    } else {
        $name = trim($_POST["name"]);
    }
    // Validate the role
    if (empty(trim($_POST["role"]))) {
        $role_err = "Please select a role.";
    } else {
        $role = trim($_POST["role"]);
    }

    // Check input errors before inserting in database
    if (empty($useremail_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($name_err) && empty($role_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO idusers (useremail, username, password, token, name, role) VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_useremail, $param_username, $param_password, $param_token, $param_name, $param_role);

            // Set parameters
            $param_useremail = $useremail;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_token = bin2hex(random_bytes(50)); // generate unique token
            $param_name = $name;
            $param_role = $role;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to users page
                echo mysqli_error($link);
                header("location: index.php");
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


 <?php include("layouts/head-main.php")?>
<head>
    <title> اضافة عضو | Dashboard </title>
    <?php include("layouts/head.php") ?>
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <?php include("layouts/head-style.php") ?>
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
                        if ($permission == 'admin') { ?>
                <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">اضافة عضو جديد </h4>
                                <p class="card-title-desc">ادخل بيانات العضو الجديد </p>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="name"> اسم العضو </label>
                                                <input id="name" name="name" type="text" class="form-control">
                                                <span class="text-danger"><?php echo $name_err; ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password"> الرقم السري</label>
                                                <input id="password" name="password" type="password" class="form-control">
                                                <span class="text-danger"><?php echo $password_err; ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email"> البريد الالكتروني </label>
                                                <input id="email" name="useremail" type="email" class="form-control">
                                                <span class="text-danger"><?php echo $useremail_err; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="username"> اسم المستخدم </label>
                                                <input id="username" name="username" type="username" class="form-control">
                                                <span class="text-danger"><?php echo $username_err; ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="confirm_password"> تأكيد الرقم السري </label>
                                                <input id="confirm_password" name="confirm_password" type="password" class="form-control">
                                                <span class="text-danger"><?php echo $confirm_password_err; ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">الدور</label>
                                                <select class="form-control select2" name="role">
                                                    <option>اختر</option>
                                                    <option value="editor">محرر</option>
                                                    <option value="admin">مسئول</option>
                                                </select>
                                                <span class="text-danger"><?php echo $role_err; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">اضافة</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div><!-- end row-->
<?php
    }else {
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