<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Tất cả tài khoản</h3>
        </div>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                    <form action="" method="post">
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="checkbox sorting_disabled sorting_asc_disabled sorting_desc_disabled" id="checkbox"></th>
                                    <th class="user">Tên đăng nhập</th>
                                    <th class="pass">Mật khẩu</th>
                                    <th class="tenkh">Họ Tên</th>
                                    <th class="email">Email</th>
                                    <th class="sdt">SDT</th>
                                    <th class="diachi">Địa Chỉ</th>
                                    <th class="block">Trạng Thái</th>
                                    <th class="gioihan">Hạn Chế</th>
                                    <th class="vaitro">Vai Trò</td>
                                    <th class="hanhdong">Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $i = 1;
                              
                                if(isset($kq) && count($kq)>0){
                                  foreach ($kq as $user) {
                                  $block = "";
                                    if($user['vaitro'] == 1){
                                      $vaitro = 'Admin';
                                      $action = '<a href="index.php?act=xoa-Tai-Khoan&id='.$user['id'].'" class="btn btn-danger btn-md">Xóa</a>';
                                      $block = 'Hoạt động';
                                    }
                                    if($user['vaitro'] == 0){
                                      $vaitro = 'User';
                                      if($user['block'] == 1){
                                        $block = 'Đã khóa';
                                        $action = ' <a href="unblock_acc&id='.$user['id'].'" class="btn btn-primary btn-md">Unblock</a>
                                                    <a href="index.php?act=xoa-Tai-Khoan&id='.$user['id'].'" class="btn btn-danger btn-md">Xóa</a>';
                                      }
                                      if($user['block'] == 0){
                                        $block = 'Hoạt động';
                                        $action = ' <a href="block_acc&id='.$user['id'].'" class="btn btn-primary btn-md">Block</a>
                                                    <a href="index.php?act=xoa-Tai-Khoan&id='.$user['id'].'" class="btn btn-danger btn-md">Xóa</a>';
                                      }
                                      if($user['gioihan'] == 0){
                                      $gioihan = 'Không';
                                      $action .='<a href="limited&id='.$user['id'].'" class="btn btn-warning btn-md">Limited</a>';
                                    }
                                    if($user['gioihan'] == 1){
                                      $gioihan = 'Khóa Bình Luận';
                                      $action .='<a href="unlimited&id='.$user['id'].'" class="btn btn-success btn-md">Limited</a>';
                                    }
                                    }
                                    
                                    
                                    
                                    echo '<tr>
                                              <td class="checkbox">
                                                  <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                              </td>
                                              <td>
                                                <div class="table-td-content">'.$user['username'].'</div>
                                              </td>
                                              <td class="">
                                                <div class="table-td-content">'.md5($user['pass']).'</div>
                                              </td>
                                              <td class="">
                                                <div class="table-td-content">'.$user['HoTen'].'</div>
                                              </td>
                                              <td class="">
                                                <div class="table-td-content">'.$user['email'].'</div>
                                              </td>
                                              <td class="">'.$user['sdt'].'</td>
                                              <td>
                                                <div class="table-td-content">'.$user['diachi'].'</div>
                                              </td>
                                              <td>'.$block.'</td>
                                              <td>'.$gioihan.'</td>
                                              <td>'.$vaitro.'</td>
                                              <td class="">
                                                  <div class="table-td-button">
                                                      '.$action.'
                                                  </div>
                                              </td>
                                          </tr>';
                                  }
                                }
                              ?>                                
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th class="checkbox sorting_disabled sorting_asc_disabled sorting_desc_disabled" id="checkbox"></th>
                                    <th class="user">tên đăng nhập</th>
                                    <th class="pass">mật khẩu</th>
                                    <th class="tenkh">tên khách hàng</th>
                                    <th class="email">email</th>
                                    <th class="sdt">sdt</th>
                                    <th class="diachi">địa chỉ</th>
                                    <th class="block">khóa</th>
                                    <th class="gioihan">hạn chế</th>
                                    <th class="vaitro">Vai trò</td>
                                    <th class="hanhdong">hành động</th>
                                </tr>
                            </tfoot> -->
                        </table>
                        <div class="col-lg-12 grid-margin btn-s">
                            <input class="btn btn-md btn-primary" id="checkAll" type="button" value="Chọn tất cả">
                            <input class="btn btn-md btn-success" id="UncheckAll" type="button" value="Bỏ chọn tất cả">
                            <input class="btn btn-md btn-danger" type="submit" value="Xóa mục đã chọn">
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>