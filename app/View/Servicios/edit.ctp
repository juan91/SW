<div class="servicios form">
<?php echo $this->Form->create('Servicio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Servicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('valor');
		//echo $this->Form->input('Persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Servicio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Servicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
