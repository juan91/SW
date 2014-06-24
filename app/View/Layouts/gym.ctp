<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('reset','miestilo'));
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		 echo $this->Html->script(array("calendar","calendar-es","calendar-setup","jquery","jqueryui")); 
 		echo $this->Html->css("calendario");

	?>

	<script type="text/javascript"> 
$(document).ready(function(){
 
 var href = $(location).attr('href');
 var url = $(this).attr('title');

 if(url=="Home"){
 var x=$("#cabecera");
 x.show("clip",1090);
 }else{
 	var x=$("#cabecera");
 	x.css("display","block");	
 }

});
</script>

</head>
<body>

		<div id="cabecera">
			<ul>
				<li>
				<?php 
				echo $this->Html->link(__('PERSONAS'), array('controller' => 'personas',"action"=>"index"),array("class"=>"myButton"))
				 ?>
			   </li>
				<li>
				<?php 
				echo $this->Html->link(__('INGRESO PERSONA'), array('controller' => 'Personas_Servicios',"action"=>"index"),array("class"=>"myButton"))
				 ?>
				</li>
					<li>
				<?php 
				echo $this->Html->link(__('MODALIDAD'), array('controller' => 'servicios',"action"=>"index"),array("class"=>"myButton"))
				 ?>
				</li>
				<li>
				<?php 
				echo $this->Html->link(__('REPORTES'), array('controller' => 'users',"action"=>"index"),array("class"=>"myButton"))
				 ?>
				</li>
				<li>
				<?php 
				echo $this->Html->link(__('REPORTES'), array('controller' => 'users',"action"=>"index"),array("class"=>"myButton"))
				 ?>
				</li>
				
			</ul>
		</div>
	
		</div>
		<div id="content">
			<div id="mensaje_query">
				<?php echo $this->Session->flash(); ?>
			</div>
			<?php echo $this->fetch('content'); ?>
			<?php echo $this->Js->writeBuffer(array("cache"=>true)); ?>	
		</div>
	

	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
