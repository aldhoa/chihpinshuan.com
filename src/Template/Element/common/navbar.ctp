<nav id="nav-3">
	<?php echo $this->Html->link('Home',['controller' => 'Product', 'action' => 'prodtype', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('About us',['controller' => 'Product', 'action' => 'index', '_full' => true],['class' => 'link-3']) ?>
	
	<?php //echo $this->Html->link('Media',['controller' => 'Product', 'action' => 'media', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Shop',['controller' => 'Product', 'action' => 'orderinfo', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Contact us',['controller' => 'Product', 'action' => 'contact', '_full' => true],['class' => 'link-3']) ?>
</nav>