<div class="Lefter">
     	  <!-- <div class="ContentTitle"></div> -->
            <div class="About">
              <form action="" name="cartForm1" method="post" id="cartForm1">
              <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#cea06f">
                <tbody><tr>
                  <td width="5%" align="center" bgcolor="#FEF4D0">刪除</td>
                  <td width="20%" align="center" bgcolor="#FEF4D0">圖片</td>
                  <td width="30%" align="center" bgcolor="#FEF4D0">產品名稱</td>
                  <td width="15%" align="center" bgcolor="#FEF4D0">包裝</td>
                  <td width="15%" align="center" bgcolor="#FEF4D0">數量</td>
                  <td width="15%" align="center" bgcolor="#FEF4D0">價格</td>
                </tr>
                <?php
                  if(!empty($listProductInCart) && !empty($productInCart['quantity'])) {
                     $totalMoney = $quantity = '';
                     foreach ($listProductInCart as $product) {
                      foreach ($productInCart['quantity'][$product['id']] as $key => $value) {
                       ?> 
                        <tr>
                  <td align="center" bgcolor="#FEF4D0">
                    <input name="cart_delete[]" value="<?php echo $product['id'] ?>" type="checkbox">
                    </td>
                  <td align="center" bgcolor="#FEF4D0">
                  <table width="5%" border="0" cellspacing="0" cellpadding="0">

                  <tbody>
                  <tr>
                    <td style="border:solid 1px #F7BD73">
                      <?php echo $this->Html->image('uploads/'.$product['image_1'],['width' => '90','height' => '73']); ?>
                    </td>
                  </tr>
                  </tbody>
                  </table>
                  </td>

                  <td align="center" bgcolor="#FEF4D0">
                  <font style="color:#000000; font-size:14px; font-weight:bold;"><?php echo !empty($product['name']) ? $product['name'] : ''; ?></font>
                  </td>
                  <td align="center" bgcolor="#FEF4D0">
                  <font style="color:#000000; font-size:14px; font-weight:bold;"><?php echo $key == 1 ? 'Đóng hộp' : 'Đóng gói' ?></font>
                  </td>
                  <td align="center" bgcolor="#FEF4D0">
                  <input name="cart_quantity[]" id="<?php echo $product['id'] ?>"  value="<?php echo $productInCart['quantity'][$product['id']][$key]; ?>" size="4" type="text">
                  <input name="product_id[]" value="<?php echo $product['id'] ?>" type="hidden" />

                  <td align="center" bgcolor="#FEF4D0"><span>
                  <?php echo number_format($product['price'] *  $productInCart['quantity'][$product['id']][$key])?>
                    
                  </span></td>

                </tr>
                        
                    <?php 
                    $totalMoney += $product['price'] *  $productInCart['quantity'][$product['id']][$key];
                    $quantity += $productInCart['quantity'][$product['id']][$key];
                  }
                      
                   
                   ?>
                   
                   <?php
                  }
                  }
                ?>
                <tr>
                  <td align="right" bgcolor="#FEF4D0" colspan="6">總數量
                    <input readonly="" type="text" size="7" name="total_price2" id="total_price2" style="width:45px" value="<?php echo $quantity ?>" disabled="disabled">&nbsp;&nbsp;總金額
                    <input readonly="" type="text" size="7" name="total_price" id="total_price" style="width:45px" value="<?php echo !empty($totalMoney) ? number_format($totalMoney) : 0 ?>" disabled="disabled"></td>
                </tr>     
                <tr>
                  <td colspan="6" align="left" bgcolor="#FEF4D0"><table width="100%" border="0" cellspacing="0" cellpadding="4">
                    <tbody><tr>
                      <td width="9%">
      
                      <?php echo $this->Html->image('/webroot/web/images/gx.jpg',["id" => 'delete_item_cart']); ?>
                      </td>
                      <td width="9%">
                      <a href="<?php echo $this->Url->build(["controller" => "Product", "action" => "prodtype"]); ?>">

                        
                      <?php echo $this->Html->image('/webroot/web/images/js.jpg',['width' => '58','height' => '19','border' => 0]); ?>
                      </td>
                      <td width="82%" align="right">
                             
                      <a href="<?php echo $this->Url->build(["controller" => "Product", "action" => "OrderAddress"]); ?>">


                        <?php echo $this->Html->image('/webroot/web/images/enter.jpg',['width' => '67','height' => '20','border' => 0]); ?>
                      </a>
                                            </td>
                    </tr>
                  </tbody></table></td>
                </tr>
              </tbody></table>
              </form>
            </div>
      </div>
      <style>
        #delete_item_cart {
          cursor: pointer;
        }
      </style>
      <script>
        $(document).ready(function(){
          $('#delete_item_cart').click(function(){
            $('#cartForm1').submit();
          });
        });
      </script>
