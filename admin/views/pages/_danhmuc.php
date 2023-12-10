<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Tất cả danh mục</h3>
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
                                <th class="stt">STT</th>
                                <th class="tendm">Tên danh mục</th>
                                <th class="hienthi">Hiển thị</th>
                                <th class="hanhdong">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                           
                            if(isset($kq)&&count($kq)>0){
                                $i = 1;
                              foreach ($kq as $dm) {
                                if($dm['visible'] == 1){
                                  $hienthi = 'Đang hiển thị';
                                  $change = '<a href="index.php?act=an-danh-muc&id=' . $dm['id'] . '" class="btn btn-warning">Ẩn</a>';
                                }else{
                                  $hienthi = 'Ẩn';
                                  $change = '<a href="index.php?act=hien-danh-muc&id=' . $dm['id'] . '" class="btn btn-success">Hiện</a>';
                                }                                
                                echo '<tr>
                                          <td class="checkbox">
                                              <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                          </td>
                                          <td class="stt">'.$i.'</td>
                                          <td class="">
                                              <div class="table-td-content">
                                                '.$dm['tendm'].'
                                              </div>
                                          </td>
                                          <td class="hienthi">'.$hienthi.'</td>                               
                                          <td class="hanhdong">
                                              <div class="table-td-button">
                                                  <div>'.$change.'</div>
                                                  <a href="edit-Danh-Muc&id='.$dm['id'].'" class="btn btn-primary btn-md">Sửa</a>
                                                    <div class="topbar-content register-container" style="margin: 10px 0px; ">
                                                      <button class="btn btn-danger btn-md" onclick="document.getElementById(`id'.$i.'`).style.display=`block`" style="width:auto; font-size: 18px;">Xóa</button>
                                                      <div class="register-outline"></div>
                                                    </div>
                                              </div>
                                          </td>
                                      </tr>';
                                      echo '<div id="id'.$i.'" class="modal">
                                <div class="modal-content animate">
                                  <div class="container" style="background-color:white">
                                      <h3 class="login"style="color:black;padding:20px;text-align:center">Bạn có chắc muốn xóa? </h3>
                                      <div style="display:flex;justify-content:center;gap:20px;"> 
                                        <button class="btn btn-primary btn -md" onclick="document.getElementById(`id'.$i.'`).style.display=`none`" style="width:auto;">Không</button>
                                        <a href="xoa-Danh-Muc&id=' . $dm['id'] . '" class="btn btn-danger btn-md">Xóa</a>
                                      
                                      </div>
                                      
                                      <input class="login" type="text" name="username" required>
                                      
                                    
                                  </div>
                                
                                </div>
                              </div>';
                                $i++;
                              }
                            }
                          ?>
                            <!-- <tr>
                                <td class="checkbox">
                                    <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                </td>
                                <td class="stt">1</td>
                                <td class="">
                                    <div class="table-td-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, harum nam non sapiente quod distinctio. Aliquam adipisci error debitis provident incidunt labore enim repellendus, odio officiis nobis, maiores quibusdam explicabo!
                                    </div>
                                </td>
                                <td class="hienthi">Hiển thị</td>                                
                                <td class="hanhdong">
                                    <div class="table-td-button">
                                        <a href="#"><Button class="btn btn-primary btn-md">Sửa</Button></a>
                                        <a href="#"><Button class="btn btn-danger btn-md">Xóa</Button></a>
                                    </div>
                                </td>
                            </tr>                             -->
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th class="checkbox sorting_disabled sorting_asc_disabled sorting_desc_disabled" id="checkbox"></th>
                                <th class="stt">STT</th>
                                <th class="tendm">Tên danh mục</th>
                                <th class="hienthi">Hiển thị</th>
                                <th class="hanhdong">Hành động</th>                           
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