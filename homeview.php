<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../assets/plugin/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/dist/css/adminlte.css.map">
  <link rel="stylesheet" href="../assets/css/product.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!--start Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   
    </ul>
  </nav>
  <!--end.navbar -->

  <!-- start sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="data:image/jpeg;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>


    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="data:image/jpeg;base64,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" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>         
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
            </ul>
          </li>

          
        </ul>
      </nav>

    </div>
 
  </aside>

  <!-- end sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 


    <!-- Main content -->


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <button class="btn btn-danger">Thêm sản phẩm</button>
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
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>IPhone 15 Plus 256GB</td>
                    <td>IPhone 15 Plus 256GB</td>
                    <td><img style="height: 100px;" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:90/plain/https://cellphones.com.vn/media/catalog/product/i/p/iphone-14-pro-max-256gb.png" alt=""></td>
                    <td>28.000.000</td>
                    <td>24.000.000</td>
                    <td>13</td>
                    <td>Hiển thị</td>
                    <td>
                      <button class="btn1 btn-danger">Xóa</button>
                      <button class="btn1 btn-warning">Sửa</button>
                    </td>
                  </tr>

            </table>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<script src="../assets/plugin/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="../assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<!-- <script src="dist/js/adminlte.js"></script> -->
<script src="../assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->
<script src="../assets/plugin/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<script src="../assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard3.js"></script> -->
<script src="../assets/dist/js/pages/dashboard3.js"></script>
</body>
</html>
