<!--top-Header-messaages-->
<div class="btn-group rightzero"> 
  <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a>
  <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> 
  <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
  <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> 
</div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Danh Mục Quản Lý</a>
  <ul>
    <li> <a href="<?php echo $this->Url->build(["controller" => "product", "action" => "product"]); ?>"><i class="icon icon-briefcase"></i> <span>Sản Phẩm</span></a> </li>
    </li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb">  <a href="#" class="current">Đơn Hàng</a> </div>
    <h1>Đơn Hàng</h1>
  </div>
   
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Danh Sách Đơn Hàng</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Họ Tên</th>
                  <th>Địa Chỉ</th>
                  <th>Số Điện Thoại</th>
                  <th>Email</th>
                  <th>Nội Dung</th>
                  <th>Chi Tiết Đơn Hàng&frasl; Đã Giao Hàng&frasl; Xóa Hoặc Khôi Phục</th>
                  <th>Trạng Thái</th>
                </tr>
              </thead>
              <tbody class="btn-icon-pg my-btn-icon-pg don-hang">
                <?php foreach ($data as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['customer_name']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['note']; ?></td>
                    <td class="o-giua">
                      <div class="widget-content">

                      <!-- <a href="<?php //echo $this->Url->build(["controller" => "orders", "action" => "orderDetail", "id"=>$value['id']]); ?>" data-toggle="modal"> <button class="btn tip-top" data-original-title="Chi Tiết Đơn Hàng"><ul><li><i class="icon-info-sign"></i></li></ul></button> </a>
     -->
                      <div id="1" class="modal hide">
                        <div class="modal-header">
                          <button data-dismiss="modal" class="close tip-top" data-original-title="Đóng" type="button">×</button>
                          <h3>Thông Tin Đơn Hàng</h3>
                        </div>
                        <div class="modal-body">
                          <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                              <h5>Chi Tiết Đơn Hàng</h5>
                            </div>
                          </div>
                          <div>
                            <button class="btn tip-top" data-original-title="Đã Soạn Hàng"><ul><li><i class="icon-cog"></i></li></ul></button>
                            <button class="btn tip-top" data-original-title="Chưa Soạn Hàng"><ul><li><i class="icon-repeat"></i></li></ul></button>
                          </div>
                        </div>
                        
                      </div>
                      <button class="btn tip-top" data-original-title="Đã Giao Hàng"><ul><li><i class="icon-road"></i></li></ul></button>
                      <button class="btn tip-top" data-original-title="Xóa Đơn Hàng"><ul><li><i class="icon-trash"></i></li></ul></button>
                    </div>

                    </td>
                    <td class="o-giua"><ul><li><i class="icon-ok tip-top" data-original-title="Hiện Có"></i></li></ul></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row-fluid">