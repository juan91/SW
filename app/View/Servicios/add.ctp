<?php echo $this->Form->create('Servicio'); ?>
	<fieldset>
		<legend><?php echo __('Add Servicio'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('valor');
		//echo $this->Form->input('Persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Servicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
