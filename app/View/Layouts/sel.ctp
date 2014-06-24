<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic','miestilo'));
		echo $this->Html->script(array('jquery-1.8.1.min','jquery-ui-1.8.23.custom.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
	 <div style="background:#009FEC;font-size:19px; text-align:center;box-shadow:2px 2px 3px #383931;padding:2px;">Selecione Una Persona</div> 
<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>

</body>
</html>