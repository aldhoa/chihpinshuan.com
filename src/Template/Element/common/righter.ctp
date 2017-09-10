<!-- <div class="Righter">

  <div class="ListTitle"></div>
  <div class="List">
     
        <?php 
          if(!empty($products)) {

            foreach ($products as $product) {
          ?>
          <div>
          <a href="<?php echo $this->Url->build(["controller" => "product", "action" => "product_detail",'id' => $product['id']]); ?>" class="SubMenu1"><?php echo $product['name'] ?></a>

          </div>
          <?php
            }
          }
        ?>
    </div>
  <br />
  <div class="SubMenuxjd"><a href="index.php?action=order"><img src="images/xjd.gif" border="0"></a></div>
  <div class="Tu"></div>

</div> -->
<div class="Clear"></div>