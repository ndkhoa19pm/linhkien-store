<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
    include "processing/db_conn.php";
    include "processing/func-user.php";
    $nhanvien = get_all_user($conn);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        require_once('layouts/nav-head.php');
        ?>
        <title>Nhân Viên</title>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <?php
            require_once('layouts/navbar.php');
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-left">
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
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Trang Chủ Admin</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <nav class="navbar navbar-light bg-light">
                                            <button type="button" class="btn btn-outline-primary my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-plus-lg"></i> Thêm Thể Loại</button>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Thêm Nhân Viên</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form   method="POST" id="form">
                                                                <div class="mb-3 ">
                                                                    <label for="recipient-name" class="col-form-label">Họ Tên:</label>
                                                                    <input type="text" class="form-control" id="HoTen" name="HoTen">
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="message-text" class="col-form-label">Địa Chỉ:</label>
                                                                    <input type="text" class="form-control" id="DiaChi" name="DiaChi">
                                                                </div>
                                                                <div class="mb-3 d-flex  ">
                                                                    <div class="mr-2 w-50">
                                                                        <label for="message-text" class="col-form-label">Số Điện Thoại:</label>
                                                                        <input type="number" class="form-control" id="SoDienThoai" name="SoDienThoai">
                                                                    </div>
                                                                    <div class="ml-2 w-50">
                                                                        <label for="message-text" class="col-form-label">Ngày Sinh:</label>
                                                                        <input type="date" class="form-control" id="NgaySinh" name="NgaySinh">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="message-text" class="col-form-label">Email:</label>
                                                                    <input type="email" class="form-control" id="Email" name="Email">
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="message-text" class="col-form-label">Mật Khẩu:</label>
                                                                    <div class="mb-3 align-items-center input-group" id="show_hide_password">
                                                                        <input type="password" class="form-control mr-3" id="MatKhau" name="MatKhau">
                                                                        <a href=""><i class="fa fa-eye-slash " aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="message-text" class="col-form-label">Chức Vụ:</label>
                                                                    <select class="form-select" aria-label="Default select example" id="ChucVu" name="ChucVu">
                                                                        <option selected disabled="disabled" value="" >--Chọn--</option>
                                                                        <option value="0">Quản Lý</option>
                                                                        <option value="1">Nhân Viên</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3 ">
                                                                    <label for="message-text" class="col-form-label">Khóa:</label>
                                                                    <select class="form-select" aria-label="Default select example" id="Khoa" name="Khoa">
                                                                        <option selected disabled="disabled" value="" >--Chọn--</option>
                                                                        <option value="0">Tạm Khoá</option>
                                                                        <option value="1">Hoạt Động</option>
                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary" name="Insert" id="Insert">Thêm</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <form class="form-inline">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Tìm Kiếm" aria-label="Search">
                                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Tìm Kiếm</button>
                                            </form>
                                        </nav>
                                        <?php if ($nhanvien == 0) {  ?>
                                            empty
                                        <?php } else { ?>
                                            <div id="employee_table">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Họ Tên</th>
                                                        <th>Địa Chỉ</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Ngày Sinh</th>
                                                        <th>Email</th>
                                                        <th>Chức Vụ</th>
                                                        <th>Khóa</th>
                                                        <th>Sữa</th>
                                                        <th>Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $stt = 0;
                                                    foreach ($nhanvien as $value) {
                                                        $stt++;
                                                    ?>
                                                        <tr>
                                                            <td><?= $stt ?></td>
                                                            <td><?= $value['HoTen'] ?></td>
                                                            <td><?= $value['DiaChi'] ?></td>
                                                            <td><?= $value['SDT'] ?></td>
                                                            <td><?= date("d-m-Y", strtotime($value['NgaySinh'])) ?></td>
                                                            <td><?= $value['email'] ?></td>
                                                            <td><?= $value['ChucVu'] == 1 ? "Quản lý" : "Nhân Viên" ?></td>
                                                            <td><?= $value['khoa'] == 1 ? "Hoạt Động" : "Bị Khóa" ?></td>
                                                            <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
                                                            <td><a href=""><i class="bi bi-trash"></i></a></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!--footer-->
            <?php
            require_once('layouts/nav-footer.php');
            ?>
            <?php
            require_once('layouts/nav-javascript.php');
            ?>

    </body>

    </html>

<?php } else {
    header("Location: login.php");
    exit;
}

?>