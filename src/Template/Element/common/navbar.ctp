<div style="position: absolute;top: 15px;left: 20px;width: 20%;"><?php echo $this->Html->image('/webroot/web/images/logo.png',array('width' => '80%')); ?></div>
<nav id="nav-3">
	<?php echo $this->Html->link('Home',['controller' => 'Product', 'action' => 'prodtype', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Shop',['controller' => 'Product', 'action' => 'orderinfo', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('About us',['controller' => 'Product', 'action' => 'index', '_full' => true],['class' => 'link-3']) ?>
	<?php echo $this->Html->link('Contact us',['controller' => 'Product', 'action' => 'contact', '_full' => true],['class' => 'link-3']) ?>
</nav>