<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$category = $numb = $price = $data1 = $data2 = $data3 = $data4 = $data5 = $data6 = $data7 = $data8 = $data9 = $data10 = "";
$category_err = $numb_err = $price_err = $data1__err = $data2__err = $data3__err = $data4__err = $data5__err = $data6__err = $data7__err = $data8__err = $data9__err = $data10__err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$category =$_POST['category'];
    if (empty(trim($_POST["category"]))) {
        $category_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE category = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_category);
    
            // Set parameters
            $param_category = trim($_POST["category"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $category_err = "This URL is already taken.";
                } else {
                    $category = trim($_POST["category"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["numb"]))) {
        $numb_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE number_of_category = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_numb);
    
            // Set parameters
            $param_numb = trim($_POST["numb"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $numb_err = "This URL is already taken.";
                } else {
                    $numb = trim($_POST["numb"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["price"]))) {
        $price_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE price = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_price);
    
            // Set parameters
            $param_price = trim($_POST["price"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $numb_err = "This URL is already taken.";
                } else {
                    $price = trim($_POST["price"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data1"]))) {
        $data1_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data1 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data1);
    
            // Set parameters
            $param_data1 = trim($_POST["data1"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data1_err = "This URL is already taken.";
                } else {
                    $data1 = trim($_POST["data1"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data2"]))) {
        $data2_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data2 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data2);
    
            // Set parameters
            $param_data2 = trim($_POST["data2"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data2_err = "This URL is already taken.";
                } else {
                    $data2 = trim($_POST["data2"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data3"]))) {
        $data3_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data3 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data3);
    
            // Set parameters
            $param_data3 = trim($_POST["data3"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data3_err = "This URL is already taken.";
                } else {
                    $data3 = trim($_POST["data3"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data4"]))) {
        $data4_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data4 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data4);
    
            // Set parameters
            $param_data1 = trim($_POST["data4"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data4_err = "This URL is already taken.";
                } else {
                    $data4 = trim($_POST["data4"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data5"]))) {
        $data5_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data5 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data5);
    
            // Set parameters
            $param_data5 = trim($_POST["data5"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data5_err = "This URL is already taken.";
                } else {
                    $data5 = trim($_POST["data5"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data6"]))) {
        $data6_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data6 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data6);
    
            // Set parameters
            $param_data6 = trim($_POST["data6"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data6_err = "This URL is already taken.";
                } else {
                    $data6 = trim($_POST["data6"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data7"]))) {
        $data7_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data7 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data7);
    
            // Set parameters
            $param_data7 = trim($_POST["data7"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data7_err = "This URL is already taken.";
                } else {
                    $data7 = trim($_POST["data7"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data8"]))) {
        $data8_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data8 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data8);
    
            // Set parameters
            $param_data8 = trim($_POST["data8"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data8_err = "This URL is already taken.";
                } else {
                    $data8 = trim($_POST["data8"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data9"]))) {
        $data9_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data9 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data9);
    
            // Set parameters
            $param_data9 = trim($_POST["data9"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data9_err = "This URL is already taken.";
                } else {
                    $data9 = trim($_POST["data9"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data10"]))) {
        $data10_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM shop WHERE data10 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data10);
    
            // Set parameters
            $param_data10 = trim($_POST["data10"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data10_err = "This URL is already taken.";
                } else {
                    $data10 = trim($_POST["data10"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
     // Check input errors before inserting in database
     if (empty($category_err) && empty($numb_err) && empty($price_err) && empty($data1_err) && empty($data2_err) && empty($data3_err) && empty($data4_err) && empty($data5_err) && empty($data6_err) && empty($data7_err) && empty($data8_err) && empty($data9_err) && empty($data10_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO shop (category, number_of_category, price, data1, data2, data3, data4, data5, data6, data7, data8, data9, data10) VALUES (?, ?, ?, ? ,? ,? ,? ,?,?,?,?,?,?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssss",$param_category, $param_numb, $param_price, $param_data1, $param_data2, $param_data3, $param_data4, $param_data5, $param_data6, $param_data7, $param_data8, $param_data9, $param_data10);

            // Set parameters
            $param_category = $category;
            $param_numb = $numb;
            $param_price = $price; 
            $param_data1 = $data1;
            $param_data2 = $data2;
            $param_data3 = $data3;
            $param_data4 = $data4;
            $param_data5 = $data5;
            $param_data5 = $data6;
            $param_data5 = $data7;
            $param_data5 = $data8;
            $param_data5 = $data9;
            $param_data5 = $data10;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: index.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
}
// Close connection

}
?>

<head>

    <title><?php echo $language["Create_Task"]; ?> | انشاء باقة جديدة</title>

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
                $maintitle = "المتجر";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                <?php
                    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
                    $stmt = $link->prepare("SELECT * FROM shop WHERE id=$id "); 
                    $stmt ->execute();
                    $resultSet = $stmt->get_result();
                    $rows = $resultSet->fetch_all(MYSQLI_ASSOC); 
                    mysqli_close($link);                          
                ?>

                

                <div class="row">
                    <?php foreach($rows as $row) {?>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">اضافة محتويات كارت الباقة</h4>
                            </div>
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="معلومات الباقة الاساسية">
                                                    1
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="محتويات الباقة1">
                                                    2
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="محتويات الباقة2">
                                                    3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- wizard-nav -->

                                    <div id="bar" class="progress mt-4">
                                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                    </div>
                                    <div class="tab-content twitter-bs-wizard-tab-content">
                                        <div class="tab-pane" id="progress-seller-details">
                                            <div class="text-center mb-4">
                                                <h5>معلومات الباقة الاساسية</h5>
                                                <p class="card-title-desc">اكمل المعلومات التالية</p>
                                            </div>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">فئة الباقة</label>
                                                            <input type="text" class="form-control" name="category" id="category" value="<?php echo  $row["category"] ; ?>">
                                                            <span class="text-danger"><?php echo $category_err; ?></span>
                                                            <div class="invalid-feedback">
                                                                من فضلك ادخل فئة الباقة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($numb_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">رقم الباقة</label>
                                                            <input type="text" class="form-control" name="numb" id="numb" placeholder=".......اكتب رقم الباقة.......">
                                                            <span class="text-danger"><?php echo $numb_err; ?></span>
                                                            <div class="invalid-feedback">
                                                                من فضلك ادخل رقم الباقة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-lastname-input">السعر</label>
                                                            <input type="text" class="form-control" name="price" id="price" placeholder=".......اكتب سعر الباقة.......">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                                من فضلك ادخل سعر الباقة
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                           
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">التالي <i class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="progress-company-document">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>محتويات الباقة1</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data1_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة1</label>
                                                                <input type="text" class="form-control" name="data1" id="data1">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data2_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة2</label>
                                                                <input type="text" name="data2" class="form-control" id="data2">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data3_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة3</label>
                                                                <input type="text" name="data3" class="form-control" id="data3">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data4_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة4</label>
                                                                <input type="text" name="data4" class="form-control" id="data4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data5_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة5</label>
                                                                <input type="text" name="data5" class="form-control" id="data5">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                
                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> السابق</a></li>
                                                    <li class="next"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()">التالي <i class="bx bx-chevron-right ms-1"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="progress-bank-detail">
                                            <div>
                                                <div class="text-center mb-4">
                                                    <h5>محتويات الباقة2</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data6_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة6</label>
                                                                <input type="text" name="data6" class="form-control" id="data6">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data7_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة7</label>
                                                                <input type="text" name="data7" class="form-control" id="data7">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data8_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة8</label>
                                                                <input type="text" name="data8" class="form-control" id="data8">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data9_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة9</label>
                                                                <input type="text" name="data9" class="form-control" id="data8">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data10_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">محتوي الباقة10</label>
                                                                <input type="text" name="data10" class="form-control" id="data4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                من فضلك ادخل محتوي الباقة
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary" onclick="nextTab()"><i class="bx bx-chevron-left me-1"></i> السابق</a></li>
                                                    <li class="float-end"><!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                            تطبيق
                                                            </button>

                                                            <!-- Modal -->
                                                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                         <div class="modal-dialog">
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
                                                    </li>
                                                </ul>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                   <?php };?> 
                </div>
                <!-- end row -->

               

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