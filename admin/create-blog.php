<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$title = $author = $start1 = $top_p = $green = $data1 = $data2 = $data3 = $data4 = $data5 = $data6 = $data7 = $data8 = $data9 = $data10 = $data11 = $data12 = $data13 = $data14 = $data15 = $data16 = "";
$title__err = $author__err = $start1__err = $price_err= $top_p__err = $green__err = $data1__err = $data2__err = $data3__err = $data4__err = $data5__err = $data6__err = $data7__err = $data8__err = $data9__err = $data10__err = $data11__err = $data12__err = $data13__err = $data14__err = $data15__err =  $data16__err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$title =$_POST['title'];
    if (empty(trim($_POST["title"]))) {
        $title_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE title = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_title);
    
            // Set parameters
            $param_title = trim($_POST["title"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $title_err = "This URL is already taken.";
                } else {
                    $title = trim($_POST["title"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["author"]))) {
        $author_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE author = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_author);
    
            // Set parameters
            $param_author = trim($_POST["author"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $author_err = "This URL is already taken.";
                } else {
                    $author = trim($_POST["author"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["start1"]))) {
        $start1_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE start1 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_start1);
    
            // Set parameters
            $param_start1 = trim($_POST["start1"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $start1_err = "This URL is already taken.";
                } else {
                    $start1 = trim($_POST["start1"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["top_p"]))) {
        $data1_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE top_p = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_top_p);
    
            // Set parameters
            $param_top_p = trim($_POST["top_p"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data1_err = "This URL is already taken.";
                } else {
                    $top_p = trim($_POST["top_p"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["green"]))) {
        $green_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE green = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_green);
    
            // Set parameters
            $param_green = trim($_POST["green"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data1_err = "This URL is already taken.";
                } else {
                    $green = trim($_POST["green"]);
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
        $sql = "SELECT id FROM blog WHERE data1 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data2 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data3 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_top_1_p1);
    
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
        $sql = "SELECT id FROM blog WHERE data4 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data4);
    
            // Set parameters
            $param_data4 = trim($_POST["data4"]);
    
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
        $sql = "SELECT id FROM blog WHERE data5 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data6 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data7 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data8 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data9 = ?";
    
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
        $sql = "SELECT id FROM blog WHERE data10 = ?";
    
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
    if (empty(trim($_POST["data11"]))) {
        $data11_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE data11 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data11);
    
            // Set parameters
            $param_data11 = trim($_POST["data11"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data11_err = "This URL is already taken.";
                } else {
                    $data11 = trim($_POST["data11"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data12"]))) {
        $data12_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE data12 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data12);
    
            // Set parameters
            $param_data12 = trim($_POST["data12"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data12_err = "This URL is already taken.";
                } else {
                    $data12 = trim($_POST["data12"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data14"]))) {
        $data14_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE data14 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data14);
    
            // Set parameters
            $param_data14 = trim($_POST["data14"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data14_err = "This URL is already taken.";
                } else {
                    $data14 = trim($_POST["data14"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data15"]))) {
        $data15_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE data15 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data15);
    
            // Set parameters
            $param_data15 = trim($_POST["data15"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data15_err = "This URL is already taken.";
                } else {
                    $data15 = trim($_POST["data15"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if (empty(trim($_POST["data16"]))) {
        $data16_err = "مينفعش تتساب فاضية يسطا";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM blog WHERE data16 = ?";
    
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_data16);
    
            // Set parameters
            $param_data16 = trim($_POST["data16"]);
    
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
    
                if (mysqli_stmt_num_rows($stmt) == 1000) {
                    $data16_err = "This URL is already taken.";
                } else {
                    $data16 = trim($_POST["data16"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
    
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
   
    
    
    
    
     // Check input errors before inserting in database
     if (empty($category_err) && empty($data5_err)  ) {

        // Prepare an insert statement
        $sql = "INSERT INTO blog (title, author, start1, top_p, green, data1, data2, data3, data4, data5, data6, data7, data8,data9,data10,data11,data12,data13,data14,data15,data16) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss",$param_title, $param_author, $param_start1, $top_p, $param_green, $param_data1, $param_data2, $param_data3, $param_data4, $param_data5, $param_data6, $param_data7, $param_data8, $param_data9, $param_data10, $param_data11, $param_data12, $param_data13, $param_data14, $param_data15, $param_data16);

            // Set parameters
            $param_title = $title;
            $param_author = $author;
            $param_start1 = $start1; 
            $param_top_p = $top_p;
            $param_green = $green;
            $param_data1 = $data1;
            $param_data2 = $data2;
            $param_data3 = $data3;
            $param_data4 = $data4;
            $param_data5 = $data5;
            $param_data6 = $data6;
            $param_data7 = $data7;
            $param_data8 = $data8;
            $param_data9 = $data9;
            $param_data10 = $data10;
            $param_data11 = $data11;
            $param_data12 = $data12;
            $param_data13 = $data13;
            $param_data14 = $data14;
            $param_data15 = $data15;
            $param_data16 = $data16;
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: blog.php");
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

<head>

    <title><?php echo $language["Blogs"]; ?> | اضافة مقالة جدبدة</title>

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
                $maintitle = "المقالات";
                $title = "Create Task";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">اضافة محتوي المقالة الجديدة</h4>
                            </div>
                            <div class="card-body">

                                <div id="progrss-wizard" class="twitter-bs-wizard">
                                    <ul class="twitter-bs-wizard-nav nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="معلومات المقالة الاساسية">
                                                    1
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="1محتوي المقالة">
                                                    2
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="محتوي المقالة2">
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
                                                <h5>معلومات المقالة الاساسية</h5>
                                                <p class="card-title-desc">اكمل المعلومات التالية</p>
                                            </div>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">عنوان المقالة</label>
                                                            <input type="text" class="form-control" name="title" id="title" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input"> الكاتب</label>
                                                            <input type="text" class="form-control" name="author" id="author" placeholder="............">
                                                                <span class="text-danger"><?php echo$price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                 من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">جملة افتتاحية</label>
                                                            <input type="text" class="form-control" name="start1" id="start1" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">جملة وصفية</label>
                                                            <input type="text" class="form-control" name="top_p" id="top_p" placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-name-input">المساحة الخضراء</label>
                                                            <input type="text" class="form-control" name="green"  placeholder="............">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                            من فضلك ادخل البيانات المطلوبة
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-lastname-input"> وصف1</label>
                                                            <input type="text" class="form-control" name="data1" id="data1" placeholder="........">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                             من فضلك ادخل البيانات المطلوبة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-firstname-input">وصف2</label>
                                                                <input class="form-control" type="text" name="data2" id="data2">
                                                                <span class="text-danger"><?php echo$price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                    من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                            <label for="progresspill-lastname-input">وصف3</label>
                                                            <input class="form-control" type="text" name="data3" id="data3">
                                                            <span class="text-danger"><?php echo $price_err; ?></span>
                                                            <div class="invalid-feedback">
                                                             من فضلك ادخل البيانات المطلوبة
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
                                                    <h5>محتوي المقالة1</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف4</label>
                                                                <input type="text" class="form-control" name="data4" id="data4">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف5</label>
                                                                <input type="text" name="data5" class="form-control" id="data5">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data5_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف6</label>
                                                                <input type="text" name="data6" class="form-control" id="data6">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data7_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف7</label>
                                                                <input type="text" name="data7" class="form-control" id="data7">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data7_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف8</label>
                                                                <input type="text" name="data8" class="form-control" id="data8">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data9_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف9</label>
                                                                <input type="text" name="data9" class="form-control" id="data9">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>                                                         
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data10_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف10</label>
                                                                <input type="text" name="data10" class="form-control" id="data10">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
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
                                                    <h5>محتوي المقالة2</h5>
                                                    <p class="card-title-desc">اكمل المعلومات التالية</p>
                                                </div>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data11_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف11</label>
                                                                <input type="text" name="data11" class="form-control" id="data11">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data12_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف12</label>
                                                                <input type="text" name="data12" class="form-control" id="data12">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data14_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف13</label>
                                                                <input type="text" name="data13" class="form-control" id="data13">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($table2_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">وصف14</label>
                                                                <input type="text" name="data14" class="form-control" id="data14">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data16_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">جملة وصفية للكاتب</label>
                                                                <input type="text" name="data15" class="form-control" id="data15">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3 <?php echo (!empty($data16_err)) ? 'has-error' : ''; ?>">
                                                                <label for="progresspill-cstno-input" class="form-label">رابط لينكدان</label>
                                                                <input type="text" name="data16" class="form-control" id="data16">
                                                                <span class="text-danger"><?php echo $price_err; ?></span>
                                                                <div class="invalid-feedback">
                                                                                                                                   من فضلك ادخل البيانات المطلوبة
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                        
                                                        
                                                       
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
                </div>
                <!-- end row -->

                <!-- Modal -->
                <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <div class="mb-3">
                                        <i class="bx bx-check-circle display-4 text-success"></i>
                                    </div>
                                    <h5>Confirm Save Changes</h5>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal" onclick="nextTab()">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

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