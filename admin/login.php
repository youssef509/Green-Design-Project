<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "layouts/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "يرجي ادخال اسم المستخدم";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "يرجي ادخال كلمة المرور";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password, profileimg, name, last_login, ar_name FROM idusers WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $user_photo, $name, $last_login, $ar_name);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["profileimg"] = $user_photo ? $user_photo : "defult.jpg";
                            $_SESSION["name"] = $name;
                            $_SESSION["ar_name"] = $ar_name;
                            $_SESSION['role'] = $permission;
                            // Update the last login date and IP address in the database
                            $current_date = date("Y-m-d H:i:s");
                            $current_ip = $_SERVER['REMOTE_ADDR'];
                            $sql = "UPDATE idusers SET last_login = ?, last_ip = ? WHERE id = ?";
                            if ($stmt = mysqli_prepare($link, $sql)) {
                                mysqli_stmt_bind_param($stmt, "ssi", $current_date, $current_ip, $id);
                                mysqli_stmt_execute($stmt);
                            }

                            // Redirect user to welcome page
                            header("location: index.php");
                            exit();
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "كلمة المرور غير صحيحة";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "لايوجد حساب مسجل باسم المستخدم الذي ادخلته";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>



<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Login"]; ?> | PLATINUM </title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<div class="auth-page">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="login-center-div">
                <div class="auth-full-page-content d-flex p-sm-5 p-4">
                    <div class="w-100">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5 text-center">
                                <a href="index.php" class="d-block auth-logo">
                                    <img src="assets/images/(7).png" alt="" height="28"> <span class="logo-txt">PLATINUM</span>
                                </a>
                            </div>
                            <div class="auth-content my-auto">
                                <div class="text-center">
                                    <h5 class="mb-0">تسجيل الدخول</h5>
                                    <p class="text-muted mt-2">ادخل البيانات المطلوبة</p>
                                </div>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="form-floating form-floating-custom mb-4">
                                        <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" id="\username" name="username"  placeholder="اسم المستخدم">
                                        <label for="input-username">اسم المستخدم</label>
                                        <span class="text-danger"><?php echo $username_err; ?></span>
                                        <div class="form-floating-icon">
                                            <i data-feather="users"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                        <input type="password" class="form-control pe-5" id="password" name="password" placeholder="كلمة المرور">
                                        <span class="text-danger"><?php echo $password_err; ?></span>
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" id="password-addon">
                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                        </button>
                                        <label for="input-password">كلمة المرور</label>
                                        <div class="form-floating-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">دخول</button>
                                    </div>
                                </form>
                            </div>
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> POWERED BY<i class="mdi mdi-heart text-danger"></i> PLATINUM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end auth full page content -->
            </div>
            <!-- end col -->
            
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container fluid -->
</div>

<?php include 'layouts/vendor-scripts.php'; ?>


</body>

</html>