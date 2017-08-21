
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
  echo $this->Html->css('/admin/css/backend_style');
  echo $this->Html->css('/admin/css/bootstrap.min');
  echo $this->Html->css('/admin/css/bootstrap-responsive.min');
  echo $this->Html->css('/admin/css/colorpicker');
  echo $this->Html->css('/admin/css/datepicker');
  echo $this->Html->css('/admin/css/fullcalendar');
  echo $this->Html->css('/admin/css/jquery.gritter');
  echo $this->Html->css('/admin/css/maruti-login');
  echo $this->Html->css('/admin/css/maruti-media');
  echo $this->Html->css('/admin/css/maruti-style');
  echo $this->Html->css('/admin/css/select2');
  echo $this->Html->css('/admin/css/uniform');
  
  echo $this->Html->script('/admin/js/jquery.min');
?>
</head>
<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="dashboard.html">Cripy Pork Jerky</a></h1>
    </div>
    <!--close-Header-part--> 
    <?= $this->fetch('content') ?>
    <div id="footer" class="span12"> 2017 &copy; Cripy Pork Jerky Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> 
    </div>
</div>
</body>
</html>
