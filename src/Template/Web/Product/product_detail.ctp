<?php 
  if(!empty($product_detail[0])){
   $product = $product_detail[0];
  }
?>
<div class="Lefter">
          <!-- <div class="ContentTitle"></div> -->
            <div class="List">
        <div class="SubMenu"><?php echo $product['name'] ?></div>
      </div>
            <div class="Pr000">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                  <td width="45%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td><table width="314" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td height="210" align="center" valign="top">
                          <!--style="background:url(images/pr00.jpg) no-repeat left top; padding-top:7px;"-->
                          <div id="big_img">

                         <?php 
                            echo $this->Html->link(
                              $this->Html->image('uploads/'.$product['image_1'],['width' => '600','height' => '510','alt' => $product['name']]),
                              '/webroot/img/uploads/'.$product['image_1'],
                              ['escape' => false,'class' => 'show_full_img']
                          );
                         ?>


                          </div></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="3">
                        <tbody><tr>
                          <td align="center" width="33.3%">

                          <?php 
                            echo $this->Html->link(
                              $this->Html->image('uploads/'.$product['image_2'],['width' => '134','height' => '182','alt' => $product['name']]),
                              '/webroot/img/uploads/'.$product['image_2'],
                              ['escape' => false,'class' => 'show_full_img']
                          );
                         ?>

                          </td>
                          <td align="center" width="33.3%">

                          <?php 
                            echo $this->Html->link(
                              $this->Html->image('uploads/'.$product['image_3'],['width' => '134','height' => '182','alt' => $product['name']]),
                              '/webroot/img/uploads/'.$product['image_3'],
                              ['escape' => false,'class' => 'show_full_img']
                          );
                         ?>
                          </td>
                          <td align="center" width="33.3%">

                          <?php 
                            echo $this->Html->link(
                              $this->Html->image('uploads/'.$product['image_4'],['width' => '134','height' => '182','alt' => $product['name']]),
                              '/webroot/img/uploads/'.$product['image_4'],
                              ['escape' => false,'class' => 'show_full_img']
                          );
                         ?>

                          </td>
                        </tr>
                      </tbody></table>
                      <?php echo $this->Form->create(null, [
                        'url'   => '/add_product',
                        'type'  => 'post',
                        'id'    => 'addProduct' 
                    ]); ?>
                       <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>

                        <tr>
                          <td align="left"><input type="radio" name="type_product" value="1" checked="">Đóng hộp</td>
                         </tr>
                       
                        <tr>
                          <td align="left"><input type="radio" name="type_product" value="2">Đóng gói</td>
                         </tr>

                      </tbody></table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td width="100%" colspan="3" style="padding-top:5px">
                            <a class="go-cart" title="馬上訂購"></a>
                            <input type="hidden" name="product_id" value="<?php echo $product['id'] ?>">
                           
                          </td>
                        </tr>
                      </tbody></table>
                    </form>

                      </td>
                    </tr>
                  </tbody></table></td>
                  <td width="55%" valign="top" style="padding-left:15px; line-height:25px">
                  <strong><?php echo $product['note'] ?><br>
<font color="#000000"><font face="新細明體"><strong>保存期間：二<span lang="EN-US">個月。</span></strong></font></font></strong>                  
                  </td>
                </tr>
              </tbody></table>
          </div>
        </div>
        <script>
          $(function() {
            $('.show_full_img').click(function(){
              return hs.expand(this);
            });

            $('.go-cart').click(function() {
              $('#addProduct').submit();
            })
            
          });
        </script>