<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <?php
        require_once "./layouts/nav-head.php";
        ?>
        <title>Linh Kiện 19PM</title>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <?php
            require_once "layouts/navbar.php";
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Trang Chủ</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                    <li class="breadcrumb-item active">Fixed Layout</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Default box -->
                                <?php
                                require_once('layouts/content.php');
                                ?>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!--footer-->
            <?php
            require_once "layouts/nav-footer.php";
            ?>
            <?php
            require_once "layouts/nav-javascript.php";
            ?>
    </body>

    </html>

<?php } else {
    header("Location: logout.php");
    exit;
}

?>