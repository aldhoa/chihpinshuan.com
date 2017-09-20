<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<?php
  echo $this->Html->css(['/web/css/slider','/web/css/menu','/web/css/style','http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500']);
  echo $this->Html->script(['/web/include/jscode/jquery','/web/include/jscode/js-image-slider','/web/include/jscode/highslide/highslide']);
?>
</head>
<body>
<div class="Wrapper">
  <!-- Header -->
  <?= $this->element('common/header') ?>

  <!-- Navbar -->
  <?= $this->element('common/navbar') ?>

  <!-- Slider -->
  <?php 
  if($this->request->getParam('action') != 'productDetail'): ?>

  <?= $this->element('common/slider') ?>
  <?php endif; ?>
  <div class="Middle">
  <?= $this->fetch('content') ?>
  <!-- Righter -->
  <?= $this->element('common/righter') ?>
  </div>
    <!-- Footer -->
    <?= $this->element('common/footer') ?>
</body>
</html>
