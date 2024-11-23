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
  <link rel="stylesheet" href="assets/css/insertproduct.css">
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

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
         
      <div class="content-form">
        <div class="form-container">
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="thongtinsanpham">
                    <div class="form-row">
                        <label for="category">Category</label> <br>
                        <select name="category_id" id="category_id">
                            <?php foreach ($cateProduct as $key => $row) { ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <label for="name_product">Tên Sản Phẩm</label>
                        <input type="text" name="name_product" id="name_product" placeholder="Tên Sản Phẩm">
                    </div>
                    <div class="form-row">
                        <label for="quantity">Số Lượng</label>
                        <input type="number" name="quantity" id="quantity" placeholder="Số Lượng">
                    </div>

                    <div class="form-row">
                        <label for="hedieuhanh">Trọng Lương</label>
                        <input type="text" name="description_1" id="hedieuhanh" placeholder="Trọng Lượng">
                    </div>

                    <div class="form-row">
                        <label for="cpu">Màn hình</label>
                        <input type="text" name="description_2" id="cpu" placeholder="CPU">
                    </div>
                    <div class="form-row">
                        <label for="ram">RAM</label>
                        <input type="text" name="description_3" id="ram" placeholder="RAM">
                    </div>
                    <div class="form-row">
                        <label for="rom">Bộ Nhớ Trong</label>
                        <input type="text" name="description_4" id="rom" placeholder="Bộ Nhớ Trong">
                    </div>
                    <div class="form-row">
                        <label for="gpu">GPU</label>
                        <input type="text" name="description_5" id="gpu" placeholder="GPU">
                    </div>


                    <div class="form-row">
                        <label for="trongluong">Hệ điều hành </label>
                        <input type="text" name="description_6" id="trongluong" placeholder="Hệ Điều Hành">
                    </div>


                </div>

                <div class="bottom">
                  <div class="form">
                  <div class="form-row">
                        <label for="gia">Giá</label>
                        <input type="text" name="price" id="gia" placeholder="Giá Gốc">
                    </div>
                    <div class="form-row">
                        <label for="gia">Giá giảm</label>
                        <input type="text" name="price_sale" id="gia" placeholder="Giá Giảm">
                    </div>
                    <div class="form-row">
                        <label for="img">Ảnh Sản Phẩm</label>
                        <input type="file" name="image" accept="image/*" id="imgInp" >
                    </div>
                </div>

                <div class="img-form">
                <label for="preview-img">Xem Trước</label>
                <div class="preview-img" id="preview-img">
                  <img src="" alt="" id="blah">
                </div>
                <button type="submit" name="submit">Thêm</button>
                </div>
                </div>

            </form>
        </div>
    </div>
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


<script>
        imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
        }
    </script>
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
