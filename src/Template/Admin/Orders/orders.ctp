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
<!-- <div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
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
                  <th>Chi Tiết Đơn Hàng
                  <!-- &frasl; Đã Giao Hàng&frasl; Xóa Hoặc Khôi Phục -->
                  </th>
                  <!-- <th>Trạng Thái</th> -->
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

                      <!-- <a href="//echo $this->Url->build(["controller" => "orders", "action" => "orderDetail", "id"=>$value['id']]);" data-toggle="modal"> 
                      <button class="btn tip-top" data-original-title="Chi Tiết Đơn Hàng"><ul><li><i class="icon-info-sign"></i></li></ul></button> </a>
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
                          </div>
                        </div>
                        
                      </div>
                      <button id="order_detail" data-toggle="modal" data-target="#myModal" class="btn tip-top" data-original-title="Chi Tiết Đơn Hàng" order_id ="<?php echo $value['id']; ?>"><ul><li><i class="icon-th"></i></li></ul></button>
                      
                       <a class="btn tip-top confirm_delete" type="submit" data-original-title="delete" href="<?php echo $this->Url->build(["controller" => "orders", "action" => "delete", "id"=>$value['id']]); ?>"> <ul><li><i class="icon-trash"></i></li></ul></a>
                    </div>

                    </td>
                    <!--
                    <td class="o-giua"><ul><li><i class="icon-ok tip-top" data-original-title="Hiện Có"></i></li></ul></td>-->
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
<!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg ablfdjal" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chi tiết đơn hàng</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-striped">
          <thead>
          <tr>
            <td>Tên sản phẩm</td>
            <td>Giá tiền</td>
            <td>Số lượng</td>
          </tr>
          </thead>

          <tbody class="body_content">
            
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="row-fluid">

<script>
  $(function(){
    $(document).on('click','#order_detail',function(){
      var id = $(this).attr('order_id');
      $('.body_content').html('');
      $.ajax({
        method: "get",
        url: "<?php echo $this->request->webroot; ?>admin/showOrderDetail?id="+id,
        dataType: "html",
        success: function(data){
          $('.body_content').html(data);
        }
      });
    })
  })

</script>