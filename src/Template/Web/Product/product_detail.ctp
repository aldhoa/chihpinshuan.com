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
                          <td height="210" align="center" valign="top"><!--style="background:url(images/pr00.jpg) no-repeat left top; padding-top:7px;"-->
                          <div id="big_img"><a href="upload/2010/01/20100123034559.jpg" onclick="return hs.expand(this)">

                          <?php echo $this->Html->image('uploads/'.$product['image_1'],['width' => '300','height' => '255','alt' => $product['name']]) ?>
                          </a></div></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="3">
                        <tbody><tr>
                          <td align="center" width="33.3%">

                          <a onclick="return hs.expand(this)" href="http://www.juelin.tw/upload/2016/02/201602141552560.jpg" class=" ">
                     

                        <?php echo $this->Html->image('uploads/'.$product['image_2'],['width' => '68','height' => '91','border' => 0]) ?>

                          </a>
                          </td>
                          <td align="center" width="33.3%"><a onclick="return hs.expand(this)" href="http://www.juelin.tw/upload/2016/02/20160214155256.jpg" class=" ">
                        

                          <?php echo $this->Html->image('uploads/'.$product['image_3'],['width' => '68','height' => '91','border' => 0]) ?>

                          </a></td>
                          <td align="center" width="33.3%"><a onclick="return hs.expand(this)" href="http://www.juelin.tw/upload/2014/07/20140702171237.jpg" class=" ">
                        

                          <?php echo $this->Html->image('uploads/'.$product['image_4'],['width' => '68','height' => '91','border' => 0]) ?>

                          </a></td>
                        </tr>
                      </tbody></table>
                       <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td align="left"><input type="radio" name="price" value="250-罐裝:重量420g淨重370g" checked="">罐裝:重量420g淨重370g&nbsp;&nbsp;價格250</td>
                         </tr>
                        <tr>
                          <td align="left"><input type="radio" name="price" value="200-袋裝:重量250g">袋裝:重量250g&nbsp;&nbsp;價格200</td>
                         </tr>
                        <tr>
                          <td align="left"><input type="radio" name="price" value="750-三入禮盒組">三入禮盒組&nbsp;&nbsp;價格750</td>
                         </tr>
                      </tbody></table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td width="100%" colspan="3" style="padding-top:5px">
                            <a href="javascript:void(0);" onclick="return checkform();return false;" class="go-cart" title="馬上訂購"></a>
                          </td>
                        </tr>
                      </tbody></table></td>
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