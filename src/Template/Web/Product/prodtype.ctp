<div class="Lefter">
       	  <!-- <div class="ContentTitle"></div> -->
            <div class="Pr">

            <?php 
              if(!empty($products)) {
                
                foreach ($products as $key => $product) {
                  $xhtml_header = $xhtml_footer = $xhtml = '';
                   if($key %3 == 0){
                $xhtml_header = '<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:18px">
                <tbody>
                <tr>';
                $xhtml_footer = '</tr></tbody></table>';
                }
                  foreach ($product as $item) {
                   
                $xhtml .= '<td><table width="221" border="0" cellspacing="0" cellpadding="0">                    
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top" class="Titlebg"><font style="font-size:14px">爵林腰果酥</font></td>
                      </tr>
                       <tr>
                          <td valign="top" style="padding-top:8px"><table width="38%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                              <td>
                              <a href="index.php?action=product_detail&pid=31">
                              <img src="upload/2014/07/20140702175541_small2.png" width="208" height="155" border="0" />                              </a>                              </td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0" height="60">
                          <tr>
                            <td align="left"><input type="radio" name="price31" value="250-罐裝:重量420g淨重370g" checked>罐裝:重量420g淨重370g                             &nbsp;&nbsp;價格
                              250</td>
                            </tr>
                          <tr>
                            <td align="left"><input type="radio" name="price31" value="200-袋裝:重量250g">袋裝:重量250g                             &nbsp;&nbsp;價格
                              200</td>
                            </tr>
                          <tr>
                            <td align="left">&nbsp;</td>
                            </tr>
                        </table>

                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="44%" style="padding-top:5px">&nbsp;</td>
                              <td width="36%" align="right"><a href="javascript:void(0);" class="Order">馬上訂購</a>&nbsp;</td>
                              <td width="20%" valign="top"><a href="javascript:void(0);"><img src="images/go.jpg" border="0" width="26" height="27" /></a></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>';

               
                  }
                  echo $xhtml_header.$xhtml.$xhtml_footer;
                }
               
              }
            ?>
                            
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="Pages" align="center">
                <tr>
                  <td align="center"><a href="javascript:;" class="BtnFirst">首頁</a><a href="javascript:;" class="BtnPrev">上一頁</a><em class="BtnNumSelect">1</em><a href="?action=prodtype&p=2" class="BtnNum">2</a><a href="?action=prodtype&p=2" class="BtnNext">下一頁</a><a href="?action=prodtype&p=2" class="BtnEnd">尾頁</a></td>
                </tr>
              </table>
            </div>
        </div>