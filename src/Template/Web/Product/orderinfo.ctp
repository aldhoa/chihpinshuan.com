
<div class="Lefter">
  	<div class="About">
  		<?php 
  			if(!empty($products)){
  				foreach ($products as $pr) {
  			$linkImg1 = '/img/uploads/'.$pr['image_1'];
  		?>
    	<div class="info_product">
    		<h2 class="title_product"><?php echo $pr['name']; ?></h2>
    		<?php echo $this->Html->image($linkImg1,array('width' => '50%')); ?>
    		<div class="description_pr"><?php echo $pr['note']; ?></div>
    	</div>
		<?php
				} 
			}

		?>
	</div>
</div>    
<style>
	.info_product {
		text-align: center;
	}
</style>