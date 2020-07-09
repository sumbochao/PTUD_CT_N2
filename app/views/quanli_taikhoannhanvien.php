<?php
  include_once 'header_admin.php';
  if($_SESSION['phanquyen']==1)
  {

    echo'<script type="text/javascript">alert("Bạn không có quyền thực hiện chức năng này");window.location="admin"</script>';
    
  }
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí tài khoản nhân viên</h1>
       
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal">Thêm tài khoản nhân viên</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
           <!--  <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
            <div class="modal-body">
              <form method="post">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Username</label>
                  <input type="email" name="username" class="form-control" id="recipient-name">
                </div>
              
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success btn-sm" name="themtaikhoan">Xác nhận</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- <h2>Section title</h2> -->
      <!-- <div>
        <a href="#" class="btn btn-sm btn-secondary ">Thêm</a>
      </div> -->
    <?php if (isset($this->message)){echo $this->message;} {
      # code...
    } ?>
      <div class="table-responsive">
        <table class="table table-striped table-sm ">
          <thead>
            <tr >
              <th scope="col">STT</th>
              <th scope="col">Username</th>
              <th scope="col">Họ và tên đệm</th>
              <th scope="col">Tên</th>
              <th scope="col">SDT</th>
              <th scope="col">Địa chỉ</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody >
            <?php $this->page->taikhoan(); ?>
            
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php
  include_once 'footer_admin.php';
?>
