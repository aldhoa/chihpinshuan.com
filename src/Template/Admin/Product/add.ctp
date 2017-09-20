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
    <li> <a href="<?php echo $this->Url->build(["controller" => "product", "action" => "product"]); ?>"><i class="icon icon-briefcase"></i> <span>Sản Phẩm</span></a> </li>
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
    <div id="breadcrumb">  <a href="#" class="current">Cripy Pork Jerky</a> </div>
    <h1>Cripy Pork Jerky</h1>
    <div class="container">
    <!-- add new product -->
  <h2>Thêm Sản Phẩm</h2>
  <form action="add" method="post" enctype="multipart/form-data" >

    <div class="form-group">
      <label for="name">Tên Sản Phẩm:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="note">Thông Tin Sản Phẩm:</label>
      <input type="note" class="form-control" id="note" placeholder="Enter note" name="note">
    </div>

    <div class="form-group">
      <label for="price">Giá :</label>
      <input type="price" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>

    <div class="form-group" enctype="multipart/form-data">
      <label for="image">Hình :</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image[]" multiple>
    </div>

    <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
  </form>
</div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
      </div>
    </div>
  </div>
</div>
<div class="row-fluid">
