<div class="Lefter">
     	  <!-- <div class="ContentTitle"></div> -->
      <div class="About">
      		<form action="" method="post" enctype="multipart/form-data" onsubmit="return checkForm(this)">
            <input type="hidden" name="send" value="email">
			 <input type="hidden" name="payrank" value="0">
			  <input type="hidden" name="shebei" value="P">


            <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#cea06f">
                <tbody><tr>
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

                   $totalMoney += $product['price'] *  $productInCart['quantity'][$product['id']][$key];
                   $quantity += $productInCart['quantity'][$product['id']][$key];
                   ?>
                  <tr>
                  <td align="center" bgcolor="#FEF4D0">
                  <table width="5%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>

                    <tr>
                      <td style="border:solid 1px #F7BD73">
                      <?php echo $this->Html->image('uploads/'.$product['image_1'],['width' => '90','height' => '73']); ?>
                      </td></tr>
                  </tbody>
                  </table>

                  </td>
                  <td align="center" bgcolor="#FEF4D0"><font style="color:#000000; font-size:14px; font-weight:bold;"><?php echo $product['name'] ?></font></td>
                  <td align="center" bgcolor="#FEF4D0"><font style="color:#000000; font-size:14px; font-weight:bold;"><?php echo $key == 1 ? 'Đóng hộp' : 'Đóng gói'; ?></font></td>
                  <td align="center" bgcolor="#FEF4D0"><?php echo $productInCart['quantity'][$product['id']][$key] ?></td>
                  <td align="center" bgcolor="#FEF4D0">
                    <span><?php echo $product['price'] * $productInCart['quantity'][$product['id']][$key]?></span></td>
                </tr>
                <?php   }
                      }
                    }
                 ?>

                  <tr>
                  <td align="right" bgcolor="#FEF4D0" colspan="6">
                    總數量：<?php echo $quantity; ?>
                    &nbsp;&nbsp;
                    <span class="notice"><strong>總金額：<?php echo $totalMoney; ?></strong></span>
                </td></tr> 

              </tbody></table>


            <table width="100%" border="0" align="center" cellpadding="8" cellspacing="0" class="cart-address">
          	    <tbody><tr>
                  <td align="left" colspan="2"><span class="notice"><strong>請留下您的聯絡方式</strong></span></td>
                </tr>
                <tr>
                  <td width="160px" align="right"><span class="redword">* </span><strong>付款方式</strong>：</td>
                  <td align="left">
                    <label for="pay1"><input name="pay" type="radio" id="pay1" value="貨到付款" checked="">貨到付款</label>
                     <!-- <label for="paycount1"><input name="pay" type="radio" id="paycount1" value="信用卡">信用卡</label>
                    <label for="paycount2"><input name="pay" type="radio" id="paycount2" value="銀聯卡">銀聯卡</label> -->
                  </td>
                </tr>
                <tr>
                  <td align="right"><span class="redword">* </span><strong>公司名稱</strong>：</td>
                  <td align="left"><input name="corp" type="text" id="corp" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><span class="redword">* </span><strong>姓名</strong>：</td>
                  <td align="left"><input name="name" type="text" id="name" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><span class="redword">* </span><strong>電話</strong>：</td>
                  <td align="left"><input name="tel" type="text" id="tel" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><span class="redword">* </span><strong>手機</strong>：</td>
                  <td align="left"><input name="phone" type="text" id="phone" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><strong>E-MAIL</strong>：</td>
                  <td align="left"><input name="email" type="text" id="email" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><span class="redword">* </span><strong>地址</strong>：</td>
                  <td align="left"><input name="address" type="text" id="address" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><strong>統編</strong>：</td>
                  <td align="left"><input name="zipCode" type="text" id="zipCode" size="40"></td>
                </tr>
                <tr>
                  <td align="right"><strong>備註</strong>：</td>
                  <td align="left"><textarea name="remark" title="備註" cols="50" rows="6"></textarea></td>
                </tr>
              <tr>
                  <td align="center" colspan="2">
                    <input type="button" value="上一頁" class="botton" onclick="location.href='index.php?action=order'">
                    <input type="submit" value="送出" class="botton">
                  </td>
                </tr> 
            </tbody></table>

            <!--<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#cea06f">
              <tbody>   
                <tr>
                  <td colspan="6" align="left" bgcolor="#FEF4D0">
                    <table width="100%" border="0" cellspacing="0" cellpadding="4">
                      <tr>
                        <td width="50%">
                          <a href="#"><img src="images/enter2.jpg" border="0" width="67" height="20"></a>
                        </td>
                        <td width="50%" align="right">
                          <a href="#"><img src="images/enter.jpg" border="0" width="67" height="20"></a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>-->

            </form>
			
      </div>
</div>