<style>
  .product_table {
    float: left;
    margin-bottom: 18px;
    margin-right: 10px;
  }
</style>
<div class="Lefter">
       	  <!-- <div class="ContentTitle"></div> -->
            <div class="Pr">

            <?php 
              if(!empty($products)) {
                $xhtml = '';
                
                foreach ($products as $key => $product) {
                  $type_table  = '';
                  foreach ($products_type as $id => $type) {
                    $checked = $id == 1 ? 'checked' : '';
                    $type_table .= '<tr>
                              <td align="left">
                              <input type="radio" name="product_type_'.$product['id'].'" value="'.$id.'" '.$checked.'>'.$type.'</td>
                              </tr>';
                  }
                 
                $xhtml .= '<table class="product_table" width="235" border="0" cellspacing="0" cellpadding="0">                    
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top" class="Titlebg"><font style="font-size:14px">'.$product['name'].'</font></td>
                      </tr>
                       <tr>
                          <td valign="top" style="padding-top:8px"><table width="38%" border="0" cellspacing="1" cellpadding="1">
                            <tr>
                              <td>
                              <a href="'.$this->Url->build(["controller" => "product", "action" => "product_detail", "id"=>$product['id']]).'">
                              '.$this->Html->image('uploads/'.$product['image_1'],['width' => '208','height' => '155','border' => 0]).'
                              </a>
                              </td>
                            </tr>
                          </table></td>
                        </tr>

                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" height="60">
                            '.$type_table.'
                            <td align="left">&nbsp;</td>
                            </tr>


                        </table>

                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="44%" style="padding-top:5px">&nbsp;</td>
                              <td width="36%" align="right"><a href="'.$this->Url->build(["controller" => "product", "action" => "addProductIntoCart", "id"=>$product['id']]).'" class="Order">馬上訂購</a>&nbsp;</td>
                              <td width="20%" valign="top"><a href="'.$this->Url->build(["controller" => "product", "action" => "addProductIntoCart", "id"=>$product['id']]).'">'.$this->Html->image('/webroot/web/images/go.jpg',['width' => '26','height' => '27','border' => 0]).'</a></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>';

               
                }
                echo $xhtml;
               
              }
            ?>
            <div style="clear:both;"></div>    
              <!-- <table width="100%" border="0" cellspacing="0" cellpadding="0" class="Pages" align="center">
                <tr>
                  <td align="center"><a href="javascript:;" class="BtnFirst">首頁</a><a href="javascript:;" class="BtnPrev">上一頁</a><em class="BtnNumSelect">1</em><a href="?action=prodtype&p=2" class="BtnNum">2</a><a href="?action=prodtype&p=2" class="BtnNext">下一頁</a><a href="?action=prodtype&p=2" class="BtnEnd">尾頁</a></td>
                </tr>
              </table> -->
            </div>
        </div>