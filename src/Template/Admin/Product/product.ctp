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
      <li> <a href="<?php echo $this->Url->build(["controller" => "orders", "action" => "orders"]); ?>"><i class="icon icon-shopping-cart"></i> <span>Đơn Hàng</span></a> </li>
    </li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

<!--close-top-Header-menu-->
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb">  <a href="#" class="current">Cripy Pork Jerky</a> </div>
      <h1>Cripy Pork Jerky</h1>
      <div class="widget-content">
      <a href="<?php echo $this->Url->build(["controller" => "product", "action" => "add"]); ?>" data-toggle="modal"> <button class="btn tip-top btn-icon-pg my-plus-btn-icon-pg" data-original-title="add" ><ul><li><i class="icon-plus"></i>Thêm Sản Phẩm </li></ul></button> </a>
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
                  <th>Hình Ảnh 1</th>
                  <th>Hình Ảnh 2</th>
                  <th>Hình Ảnh 3</th>
                  <th>Hình Ảnh 4</th>
                  <th>Thông Tin Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Sửa&frasl; Xóa Hoặc Khôi Phục</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
                <tbody class="btn-icon-pg my-btn-icon-pg dong-ho">
                <?php foreach ($data as $product) { 
                    $linkImg1 = 'uploads'.DS.$product['image_1'];
                    $linkImg2 = 'uploads'.DS.$product['image_2'];
                    $linkImg3 = 'uploads'.DS.$product['image_3'];
                    $linkImg4 = 'uploads'.DS.$product['image_4'];
                  ?>
                  <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $this->Html->image($linkImg1); ?></td>
                    <td><?php echo $this->Html->image($linkImg2); ?></td>
                    <td><?php echo $this->Html->image($linkImg3); ?></td>
                    <td><?php echo $this->Html->image($linkImg4); ?></td>
                    <td><?php echo $product['note']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td class="o-giua">
                      <div class="widget-content">
                        <a href="<?php echo $this->Url->build(["controller" => "product", "action" => "edit", "id"=>$product['id']]); ?>" data-toggle="modal"> <button class="btn tip-top" data-original-title="Sửa"><ul><li><i class="icon-pencil"></i></li></ul></button> </a>

                        <div id="1" class="modal hide">
                          <div class="modal-header">
                            <button data-dismiss="modal" class="close tip-top" data-original-title="Đóng" type="button">×</button>
                          </div>

                          <div class="modal-footer"> 
                            <a data-dismiss="modal" class="btn btn-primary tip-top" data-original-title="Sửa" href="#">Sửa</a> <a data-dismiss="modal" class="btn tip-top" data-original-title="Hủy" href="#">Hủy</a> 
                          </div>
                        </div>

                        <a class="btn tip-top" type="submit" data-original-title="delete" href="<?php echo $this->Url->build(["controller" => "product", "action" => "delete", "id"=>$product['id']]); ?>"> <ul><li><i class="icon-trash"></i></li></ul></a>

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
