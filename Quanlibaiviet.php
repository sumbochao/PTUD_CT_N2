<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Code with Bootstrap by PM</title>

    <link rel="stylesheet" href="views/css/all.css">
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/fontawesome/css/fontawesome.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Vui vẻ không quạo</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="admin.html">
              <span><i class="fas fa-home"></i>
              Trang chủ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlidonhang.html">
              <span><i class="fas fa-archive"></i></span>
              Quản lí đơn hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlisanpham.html">
              <span><i class="fas fa-shopping-cart"></i></span>
              Quản lí sản phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Quanlibaiviet.html">
              <span><i class="fas fa-edit"></i></span>
              Quản lí bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlithuoctinh.html">
              <span><i class="fas fa-clipboard-list"></i></span>
              Quản lí thuộc tính
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlitaikhoannhanvien.html">
              <span><i class="fas fa-user-friends"></i></span>
              Quản lí tài khoản nhân viên
            </a>
          </li>
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí bài viết</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
      <table class="table text-center">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Hình</th>
              <th scope="col">Tên</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Sửa</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              
              <td>England</td>
              <td>English</td>
              <td style="width: 27em; " class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              
              <td>England</td>
              <td>English</td>
              <td style="width: 27em;" class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              
              <td>England</td>
              <td>English</td>
              <td style="width: 27em;" class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
            
          </tbody>
        </table>
    </div>
    </main>
  </div>
</div>


    <script src="dashboard.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>