<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
  *{
    font-family: 'Noto Sans Lao';
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php 
  include "./includes/header.php";
  include "./includes/sidebar.php";

  include "./includes/db.php";
  
// Get user ID from URL parameter
$id = $_GET["id"];

// Retrieve user information from database
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Process form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST['password'];
    $hashPassword = md5($password);
    
    // Update user information in database
    $sql = "UPDATE users SET  email='$email', password='$hashPassword' WHERE id=$id";
    mysqli_query($conn, $sql);
    echo ' 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    // Check the condition for success
    var isSuccess = true; // Replace this with your actual condition

    // If the condition is met, show the success message
    if (isSuccess) {
      Swal.fire({
            title: "ແກ້ໄຂສຳເລັດ",
            text: "ຂໍ້ມູນໄດ້ຖືກແກ້ໄຂສຳເລັດແລ້ວ",
            icon: "success",
            timer: 2000, // 2-3 seconds
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading();
        }}
  )};
</script>';
       // Redirect to user profile page
}

mysqli_close($conn); // Close database connection
?>

<!-- HTML form to display user information and allow editing -->

 
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
                <div class="col-md-12">
                    <h1 class="text-center text-bold">ຟອມແກ້ໄຂຂໍ້ມູນAdmin</h1>
                <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">ການແກ້ໄຂຂໍ້ມູນadmin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
              <div class="card-body">
                 <div class="row">
                 <div class="col-md-6">
                 <div class="form-group">
                   <label for="exampleInputEmail1">ອີເມວ</label>
                   <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['email']?>" required placeholder="ອີເມວ">
                   </div>
                 </div>
                 <div class="col-md-6">
                 <div class="form-group">
                   <label for="exampleInputPassword1">ລະຫັດຜ່ານ</label>
                   <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $row['password']?>"  required placeholder="*******">
                 </div>
                 </div>
                 
                 </div>
               
               </div>
               <!-- /.card-body -->

               <div class="card-footer">
                 <button type="submit" class="btn btn-info">ສົ່ງຟອມ</button>
               </div>
              </form>
            </div>
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
        window.location.href = 'deleteadmin.php?id=' + $id;
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
