<nav id="nav-3">
	<?php echo $this->Html->link('About us',['controller' => 'Product', 'action' => 'index', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Product',['controller' => 'Product', 'action' => 'prodtype', '_full' => true],['class' => 'link-3']) ?>
	<?php //echo $this->Html->link('Media',['controller' => 'Product', 'action' => 'media', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Order Info',['controller' => 'Product', 'action' => 'orderinfo', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Contact us',['controller' => 'Product', 'action' => 'contact', '_full' => true],['class' => 'link-3']) ?>
	<!-- <a class="link-3" href="#">About</a> -->
	<!-- <a class="link-3" href="#">Prodtype</a>
	<a class="link-3" href="#">Media</a>
	<a class="link-3" href="#">Order Info</a>
	<a class="link-3" href="#">Contact</a> -->
</nav>