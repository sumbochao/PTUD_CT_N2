<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Code with Bootstrap by PM</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="views/css/all.css">
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/fontawesome/css/fontawesome.min.css">

  </head>

  <style type="text/css">
  
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    /*border-color:  #6c757d;*/
    border-color: #f8f9fa;
    outline: 0;
    box-shadow:  0 0 0 .2rem rgba(108,117,125,.2);
  }

  .breadcrumb {
    background-color: #fff;
    padding: 0.75em 0em;

  }
  </style>

  <body>


<header>
    <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a href="index.html" class="navbar-brand">Small business</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a href="services.html" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="team.html" class="nav-link">Team</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
    
      <!-- </div> -->
        <!-- <div class="col-4 d-flex justify-content-end align-items-center ml-auto"> -->
        <!-- <div class="dropdown"> -->
        <!-- <a class="btn btn-sm btn-outline-secondary mr-2 border-0 " data-toggle="modal" data-target="#modalSmall" href="#" aria-label="Search"><i class="fas fa-search mr-2"></i></a> -->

        <a class="btn btn-sm btn-outline-secondary mr-2" href="#"><i class="far fa-user mr-2"></i>Sign up</a>
        <a class="btn btn-sm btn-outline-secondary mr-2" href="#"><i class="fas fa-user mr-2"></i>Sign in</a>
      <!-- </div> -->
      </div>
    </div>
    </nav>
  </div>
</header>


<section>
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark ">
    <div class="col-md-6 px-0 py-3">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>
</section>

    <main>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
              <h1 class="mb-3 text-center">Tạo tài khoản mới</h1>
              <p class="lead">Đăng ký miễn phí.</p>
              <form class="mb-3">
                <div class="row">
                  <div class="form-group col-12 col-sm-6">
                    <label for="firstName">Họ và tên đệm:</label>
                    <input type="text" class="form-control" placeholder="First name" id="firstName" required>
                  </div> 
                  <div class="form-group col-12 col-sm-6">
                    <label for="lastName">Tên:</label>
                    <input type="text" class="form-control" placeholder="Last name" id="lastName" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="example@email.com" id="email" required>
                </div>
                <div class="form-group">
                  <label for="password">Mật khẩu:</label>
                  <input type="password" class="form-control" id="password" required>
                </div>
                <label>Ngày sinh:</label>
                <div class="row no-gutters">
                  <div class="form-group col-4">
                    <label for="birthdayDay" class="sr-only">Ngày sinh</label>
                    <select class="form-control" id="birthdayDay">
                      <option vaule="">Ngày</option>
                      <option value="january">January</option>
                      <option value="january">January</option>
                    </select>
                  </div>
                  <div class="form-group col-4">
                    <label for="birthdayMonth" class="sr-only">Tháng sinh</label>
                    <select class="form-control" id="birthdayMonth">
                      <option value="">Tháng</option>
                      <option value="january">January</option>
                      <option value="january">January</option>
                    </select>
                  </div>
                  <div class="form-group col-4">
                    <label for="birthdayYear" class="sr-only">Năm sinh</label>
                    <select class="form-control" id="birthdayYear">
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                    </select>
                  </div>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" name="exampleRadios" id="exampleRadios1" class="form-check-input" value="optionOne" checked>
                    Nam
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" name="exampleRadios" id="exampleRadios2" class="form-check-input" value="optionTwo">
                    Nữ
                  </label>
                </div>
                <button type="submit" class="btn btn-secondary btn-block mb-3">Tạo tài khoản</button>
                <div class="alert alert-secondary small" role="alert">By clicking above you agree to our <a href="#" class="alert-link">Terms &amp; Conditions</a> and our <a href="#" class="alert-link">Privacy Policy</a>.</div>
              </form>
              <div class="text-center">
                <p>hoặc</p>
                <a href="#" class="btn btn-secondary">Đăng nhập</a>
              </div>
            </div>
          </div>
        </div>
      </div>  

    </main>

  <footer class="small bg-light">
      <div class="container py-3 py-sm-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick links</h6>
            <ul class="list-unstyled">
              <li><a class="text-secondary" href="index.html">Home</a></li>
              <li><a class="text-secondary" href="services.html">Services</a></li>
              <li><a class="text-secondary" href="about.html">About</a></li>
              <li><a class="text-secondary" href="team.html">Team</a></li>
              <li><a class="text-secondary" href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Information</h6>
            <ul class="list-unstyled">
              <li><a class="text-secondary" href="#0">Legal information</a></li>
              <li><a class="text-secondary" href="#0">Job opportunities</a></li>
              <li><a class="text-secondary" href="#0">Frequently Asked Questions</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Follow us</h6>
            <ul class="list-unstyled">
              <li><a href="#0" class="text-secondary" ><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-youtube" aria-hidden="true"></i> YouTube</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Our location:</h6>
            <address>
              <strong>Company Name</strong><br>
              Steet Name<br>
              ZIP code and city<br>
              <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890" class="text-secondary" >(123) 456-7890</a><br>
              <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@domain.com" class="text-secondary" >info@domain.com</a>
            </address>
          </div>
        </div>
        <ul class="list-inline mt-2 mb-0 text-center">
          <li class="list-inline-item">&copy; 2017 Company Name</li>
          <li class="list-inline-item">All rights reserved.</li>
        </ul>
      </div>
    </footer>





  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>