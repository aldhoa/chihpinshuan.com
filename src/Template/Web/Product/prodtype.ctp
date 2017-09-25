<style>
  .product_table {
    /*float: left;*/
   /* margin-bottom: 18px;
    margin-right: 10px;*/
  }
  #addProduct {
    width: 25%;
    float: left;
  }
  @media only screen and (max-width: 480px) {
    #addProduct { 
      width: 100%;
    }
  }
</style>
<div class="Lefter">
          <!-- <div class="ContentTitle"></div> -->
            <div class="Pr">

            <?php 
              if(!empty($products)) {
                $xhtml =  $type_table ='';
               
                foreach ($products as $key => $product) {
                  $type_table = '<tr>
                              <td align="left">
                              <input type="radio" name="type_product" value="1" checked>Đóng hộp</td>
                              </tr>
                              <tr>
                              <td align="left">
                              <input type="radio" name="type_product" value="2">Đóng gói</td>
                              </tr>';
                  

                $xhtml .= $this->Form->create(null, [
                        'url'   => '/add_product',
                        'type'  => 'post',
                        'id'    => 'addProduct' 
                    ]).'<table class="product_table" border="0" cellspacing="0" cellpadding="0">                    
                    <tr>
                      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td valign="top" class="Titlebg"><font style="font-size:14px">'.$product['name'].'</font></td>
                      </tr>
                       <tr>
                          <td valign="top" style="padding-top:8px"><table border="0" cellspacing="1" cellpadding="1">
                            <tr>
                              <td>
                              <input type="hidden" name="product_id" value="'.$product['id'].'">
                              <a href="'.$this->Url->build(["controller" => "product", "action" => "product_detail", "id"=>$product['id']]).'">
                              '.$this->Html->image('uploads/'.$product['image_1'],['width' => '100%','border' => 0]).'
                              </a>
                              </td>
                            </tr>
                          </table></td>
                        </tr>
                        
                        <tr>
                          <td><table width="100%" border="0" cellspacing="0" cellpadding="0" height="60">
                            <td align="left">&nbsp;</td>
                            </tr>
                        </table>

                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="44%" style="padding-top:5px">&nbsp;</td>

                              <td width="36%" align="right"><a class="Order add_product_to_cart">馬上訂購</a>&nbsp;</td>
                              <td width="20%" valign="top"><a class="add_product_to_cart">'.$this->Html->image('/webroot/web/images/go.jpg',['width' => '26','height' => '27','border' => 0]).'</a></td>

                            </tr>
                          </table></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></form>';
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

        <script>
          $(function() {
            $('.add_product_to_cart').click(function() {
              $('#addProduct').submit();
            })
            
          });
        </script>