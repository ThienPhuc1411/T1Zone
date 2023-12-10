
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> T1 admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../Assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../Assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../Assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../Assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../Assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../Assets/css/style.css">
    <!-- My Layout stylesheet -->
    <link rel="stylesheet" href="../admin/my_assets/css/login.css">
    <link rel="stylesheet" href="../admin/my_assets/css/_my-style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../Assets/IMG/logo1.png" />



    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="../Assets/IMG/logo.png" alt="logo" /></a>
          <!-- <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../Assets/IMG/logo.png" alt="logo" /></a> -->
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../Assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin T1</h5>
                  <span><?=$_SESSION['hoten']?></span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Điều hướng</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="thongke">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Thống kê</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Sản phẩm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="san-pham">Tất cả sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="them-sanPham">Thêm sản phẩm</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-1" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-layers"></i>
              </span>
              <span class="menu-title">Danh mục</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="danh-muc">Tất cả danh mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="them-danhMuc">Thêm danh mục</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-apple"></i>
              </span>
              <span class="menu-title">Thương hiệu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="thuong-hieu">Tất cả thương hiệu</a></li>
                <li class="nav-item"> <a class="nav-link" href="them-thuongHieu">Thêm thương hiệu</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic-3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-newspaper"></i>
              </span>
              <span class="menu-title">Tin Tức</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic-3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="post">Tất Cả Tin Tức</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_post">Thêm Tin Tức</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="binh-luan">
              <span class="menu-icon">
                <i class="mdi mdi-comment-text-outline"></i>
              </span>
              <span class="menu-title">Bình luận</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="tai-khoan">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Tài khoản</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="don-hang">
              <span class="menu-icon">
                <i class="mdi mdi-package-variant-closed"></i>
              </span>
              <span class="menu-title">Đơn hàng</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Thống kê</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Sản phẩm</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Danh mục</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Thương hiệu</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>

<!-- plugins:js -->
    <script src="../Assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../Assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../Assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../Assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../Assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../Assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../Assets/js/off-canvas.js"></script>
    <script src="../Assets/js/hoverable-collapse.js"></script>
    <script src="../Assets/js/misc.js"></script>
    <script src="../Assets/js/settings.js"></script>
    <script src="../Assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../Assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- Table-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
    <script src="../admin/my_assets/js/jquery.dataTables.min(edited).js"></script>
    <script src="../admin/my_assets/js/dataTables.bootstrap5.min(edited).js"></script>
    <!-- Table-->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <!-- Select all -->
    <script src="../admin/my_assets/js/_my-script.js"></script>