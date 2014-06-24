<div class="personasServicios form">
<?php echo $this->Form->create('PersonasServicio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Personas Servicio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fec_ini');
		echo $this->Form->input('fec_fin');
		echo $this->Form->input('sesiones');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('activo');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('servicio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonasServicio.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonasServicio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas Servicios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
