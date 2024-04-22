                         <?php 
include "./includes/common.php";
checkLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans Lao' rel='stylesheet'>
</head>
<style>
* {
    font-family: 'Noto Sans Lao';
}
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php 
  include "./includes/header.php";
  include "./includes/sidebar.php";

  include "./includes/db.php";
  
  $sql = "SELECT * FROM users WHERE is_delete=0 AND role=3";
  $result = mysqli_query($conn, $sql);

  if(isset($_GET['success']) && $_GET['success'] === 'true'){
    echo " <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    <script>
      // Check the condition for success
      var isSuccess = true; // Replace this with your actual condition
  
      // If the condition is met, show the success message
      if (isSuccess) {
        Swal.fire({
              title: 'ບັນທຶກສຳເລັດ',
              text: 'ຂໍ້ມູນໄດ້ຖືກບັນທຶກສຳເລັດແລ້ວ',
              icon: 'success',
              timer: 2000, // 2-3 seconds
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading();
          }}
    )};
  </script>';";
  }elseif(isset($_GET['success']) && $_GET['success'] === 'false'){
    echo "<script>alert('Data error');</script>";
  }
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="./">ໜ້າຫຼັກ</a></li>
                                <li class="breadcrumb-item active">General Form</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-center text-bold">ຟອມນັກສຶກສາ</h1>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">ການລົງທະບຽນນັກສຶກ</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="POST" action="insertparents.php">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ຊື່</label>
                                                <input type="text" name="f_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ກະລຸນາປ້ອນຊື່">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ນາມສະກຸນ</label>
                                                <input type="text" name="f_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="ກະລຸນາປ້ອນນາມສະກຸນ">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="form-group">
                     <label for="exampleInputPassword1">ເພດ</label>
                    <select name="province" id="" class="form-control">
                      <option value="">-- ກະລຸນາເລືອກເພດ --</option>
                      <option value="ອັດຕະປື">ຍິງ</option>
                      <option value="ບໍ່ແກ້ວ">ຊາຍ</option>
                    </select>
                         </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ວັນດືອນປີເກີດ</label>
                                                <input type="text" name="m_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="YYY-MM-DD">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ອີເມວ</label>
                                                <input type="email" name="email" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ອີເມວ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ລະຫັດຜ່ານ</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="*******">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ອາຍຸ</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນອາຍຸ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                    <label for="exampleInputPassword1">ແຂວງ</label>
                    <select name="province" id="" class="form-control">
                      <option value="">-- ກະລຸນາເລືອກແຂວງ --</option>
                      <option value="ອັດຕະປື">ອັດຕະປື</option>
                      <option value="ບໍ່ແກ້ວ">ບໍ່ແກ້ວ</option>
                      <option value="ບໍລິຄຳໄຊ">ບໍລິຄຳໄຊ</option>
                      <option value="ຈຳປາສັກ">ຈຳປາສັກ</option>
                      <option value="ຫົວພັນ">ຫົວພັນ</option>
                      <option value="ຄຳມ່ວນ">ຄຳມ່ວນ</option>
                      <option value="ຫຼວງນ້ຳທາ">ຫຼວງນ້ຳທາ</option>
                      <option value="ຫຼວງພະບາງ">ຫຼວງພະບາງ</option>
                      <option value="ອຸດົມໄຊ">ອຸດົມໄຊ</option>
                      <option value="ຜົ້ງສາລີ">ຜົ້ງສາລີ</option>
                      <option value="ໄຊຍະບູລີ">ໄຊຍະບູລີ</option>
                      <option value="ສາລະວັນ">ສາລະວັນ</option>
                      <option value="ສະຫວັນນະເຂດ">ສະຫວັນນະເຂດ</option>
                      <option value="ເຊກອງ">ເຊກອງ</option>
                      <option value="ນະຄອນຫຼວງວຽງຈັນ">ນະຄອນຫຼວງວຽງຈັນ</option>
                      <option value="ວຽງຈັນ">ວຽງຈັນ</option>
                      <option value="ຊຽງຂວາງ">ຊຽງຂວາງ</option>
                      <option value="ໄຊສົມບູນ">ໄຊສົມບູນ</option>
                    </select>
                  </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ເມືອງ</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນເມືອງ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ທີ່ຢູ່ ບ້ານ</label>
                                                <input type="text" name="m_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="ປ້ອນບ້ານ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ເບີໂທ</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນເບີໂທ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ຊື່ພໍ່</label>
                                                <input type="text" name="m_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="ປ້ອນຊື່ພໍ່">
                                            </div>
                                        </div> <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ເບີພໍ່</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນເບີໂທພໍ່">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ຊື່ແມ່</label>
                                                <input type="text" name="m_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="ປ້ອນຊື່ແມ່">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ເບີໂທແມ່</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນເບີໂທແມ່">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ມືຖື</label>
                                                <input type="text" name="m_phone" class="form-control"
                                                    id="exampleInputPassword1" required placeholder="ປ້ອນມືຖື">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ຈຳນວນເງິນ</label>
                                                <input type="text" name="m_name" class="form-control"
                                                    id="exampleInputEmail1" required placeholder="ປ້ອນຈຳນວນເງິນ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="form-group">
                    <label for="exampleInputPassword1">ຄ່າຮຽນ</label>
                    <select name="province" id="" class="form-control">
                      <option value="">-- ຈ່າຍແລ້ວ ຫຼື ຍັງ --</option>
                      <option value="ອັດຕະປື">ຈ່າຍແລ້ວ</option>
                      <option value="ອັດຕະປື">ຍັງບໍ່ທັນຈ່າຍ</option>
                    </select>
                  </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">ສົ່ງຟອມ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6" style="overflow:auto;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ຊື່</th>
                                        <th>ນາມສະກຸນ</th>
                                        <th>ເພດ</th>
                                        <th>ວັນເດືອນປີເກີດ</th>
                                        <th>ອີເມວ</th>
                                        <th>ລະຫັດຜ່ານ</th>
                                        <th>ອາຍຸ</th>
                                        <th>ແຂວງ</th>
                                        <th>ເມືອງ</th>
                                        <th>ບ້ານ</th>
                                        <th>ເບີໂທ</th>
                                        <th>ຊື່ພໍ່</th>
                                        <th>ເບີໂທພໍ່</th>
                                        <th>ຊື່ແມ່</th>
                                        <th>ເບີໂທແມ່</th>
                                        <th>ມືຖື</th>
                                        <th>ຈຳນວນເງິນ</th>
                                        <th>ຈ່າຍແລ້ວ ຫຼື ຍັງ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id']?></td>
                                        <td><?php echo $row['email']?></td>
                                        <td><?php echo $row['password']?></td>
                                        <td><?php echo $row['f_name']?></td>
                                        <td><?php echo $row['f_phone']?></td>
                                        <td><?php echo $row['m_name']?></td>
                                        <td><?php echo $row['m_phone']?></td>
                                        <td><?php echo $row['timestamps']?></td>
                                        <td><a href="editstudent.php?id=<?php echo $row['id']?>"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></a><a href="#"
                                                onclick="confirmDelete(<?php echo $row['id'];?>)"
                                                class="btn btn-danger"><i class="fas fa-times"></i></a></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <?php 
   include "./includes/footer.php";
  ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>
    function confirmDelete($id) {
        // Using SweetAlert2 for the confirmation dialog
        Swal.fire({
            title: 'ຕ້ອງການລຶບແທ້ ຫຼື ບໍ່?',
            text: 'ທ່ານແນ່່ໃຈບໍ ທີ່ຈະລຶບລະຫັດທີ່: ' + $id,
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'ຍົກເລີກ',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'ຢືນຢັນ!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "ລົບລ້າງ!",
                    text: "ຂໍ້ມູນໄດ້ຖືກລຶບສຳເລັດແລ້ວ",
                    icon: "success",
                    timer: 2000, // 2-3 seconds
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                }).then(() => {
                    window.location.href = 'deletestudent.php?id=' + $id;
                });
            }
        });
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>