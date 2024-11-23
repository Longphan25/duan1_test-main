<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="assets/plugin/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/plugin/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/product.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!--start Navbar -->
<?php
require_once "views/component/header.php"
?>
  <!--end.navbar -->

  <!-- start sidebar -->

<?php
require_once "views/component/sidebar.php"
?>
  <!-- end sidebar -->
  <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="?act=insertproduct"><button class="btn btn-danger">Thêm sản phẩm</button></a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý sản phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <table class="table">
              <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">image</th>
                    <th scope="col">giá sản phẩm</th>
                    <th scope="col">giá sale</th>
                    <th scope="col">số lượng</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($allProduct as $key => $rows) { ?>
                  <tr>
                    <th scope="row"><?=$rows['id']?></th>
                    <td><?=$rows['name_product']?></td>
                    <td><?=$rows['name']?></td>
                    <td><img class="m-0" style="height: 100px;" src="../view/img/<?=$rows['image']?>" alt=""></td>
                    <td><?=$rows['price']?></td>
                    <td><?=$rows['price_sale']?></td>
                    <td><?=$rows['quantity']?></td>
                    <td>

                      <a href="?act=deleteproduct&id=<?=$rows['id']?>"><button class="btn1 btn-danger">Xóa</button></a>
                      <a href="?act=updateproduct&id=<?=$rows['id']?>"><button class="btn1 btn-warning">Sửa</button></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
            </table>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
<?php
require_once "views/component/footer.php"
?>
</div>


<!-- ./wrapper -->



<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<script src="assets/plugin/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<script src="assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<script src="assets/plugin/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard3.js"></script> -->
<script src="assets/dist/js/pages/dashboard3.js"></script>
</body>
</html>
