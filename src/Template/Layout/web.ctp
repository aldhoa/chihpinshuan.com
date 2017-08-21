<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<?php
  echo $this->Html->css('/web/css/style');

  echo $this->Html->script('/web/include/jscode/jquery');
?>
</head>
<body>
  <?= $this->fetch('content') ?>
</body>
</html>
