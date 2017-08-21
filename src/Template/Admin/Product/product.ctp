<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
  <!--close-top-Header-messaages--> 

  <!--top-Header-menu-->
  <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Danh Mục Quản Lý</a>
    <ul>
      <li> <a href="carts.html"><i class="icon icon-shopping-cart"></i> <span>Đơn Hàng</span></a> </li>
      <li> <a href="watches.html"><i class="icon icon-time"></i> <span>Cripy Pork Jerky</span></a> </li>
    </ul>
  </div>
  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!--close-top-Header-menu-->
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb">  <a href="#" class="current">Cripy Pork Jerky</a> </div>
      <h1>Cripy Pork Jerky</h1>
      <div class="widget-content">
      <a href="<?php echo $this->Url->build(["controller" => "admin", "action" => "add"]); ?>" data-toggle="modal"> <button class="btn tip-top btn-icon-pg my-plus-btn-icon-pg" data-original-title="add" ><ul><li><i class="icon-plus"></i>Thêm Sản Phẩm </li></ul></button> </a>
        <div id="them-dong-ho" class="modal hide">

          <div class="modal-header">
            <button data-dismiss="modal" class="close tip-top" data-original-title="Đóng" type="button">×</button>
            <h3>Thêm Món</h3>
          </div>

          <div class="modal-body">

            <form action="#" method="get" class="form-horizontal">

              <div class="control-group">
              <label class="control-label">Tên :</label>
              <div class="controls"><input class="span3" type="text" placeholder="Tên" /></div>
              </div>

              <div class="control-group">
                <label class="control-label">Chọn Hình Ảnh Mới :</label>
                <div class="controls"> <input type="file" /> </div>
              </div>

            <div class="control-group">
              <label class="control-label">Thông Tin Sản Phẩm :</label>
              <div class="controls"> <textarea class="span3" placeholder="Thông Tin Sản Phẩm" ></textarea> </div>
            </div>

            </form>

          </div>

        <div class="modal-footer"> <a data-dismiss="modal" class="btn btn-primary tip-top" data-original-title="Thêm" href="#">Thêm</a> <a data-dismiss="modal" class="btn tip-top" data-original-title="Hủy" href="#">Hủy</a> </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
          <h5>Danh Sách Sản Phẩm</h5>
          </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tên</th>
                  <th>Hình Ảnh</th>
                  <th>Thông Tin Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Sửa&frasl; Xóa Hoặc Khôi Phục</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
                <tbody class="btn-icon-pg my-btn-icon-pg dong-ho">
                <?php foreach ($data as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $this->Html->image($value['image_1']); ?></td>
                    <td><?php echo $value['note']; ?></td>
                    <td><?php echo $value['price']; ?></td>
                    <td class="o-giua">
                      <div class="widget-content"><a href="<?php echo $this->Url->build(["controller" => "admin", "action" => "add", "id"=>$value['id']]); ?>" data-toggle="modal"> <button class="btn tip-top" data-original-title="Sửa"><ul><li><i class="icon-pencil"></i></li></ul></button> </a>

                      <div id="1" class="modal hide">
                        <div class="modal-header">
                        <button data-dismiss="modal" class="close tip-top" data-original-title="Đóng" type="button">×</button>
                        </div>

                        <div class="modal-footer"> 
                        <a data-dismiss="modal" class="btn btn-primary tip-top" data-original-title="Sửa" href="#">Sửa</a> <a data-dismiss="modal" class="btn tip-top" data-original-title="Hủy" href="#">Hủy</a> 
                        </div>
                      </div>

                      <a class="btn tip-top" type="submit" data-original-title="delete" href="delete/<?php echo $value['id']; ?>"> <ul><li><i class="icon-trash"></i></li></ul></a>

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
