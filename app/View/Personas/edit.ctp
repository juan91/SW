<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('celular2');
		echo $this->Form->input('email');
		$sizes = array('M' => 'Hombre', 'F' => 'Mujer');
		echo $this->Form->input('genero',array('options' => $sizes, 'default' => 'M')
		);
		echo $this->Form->input('fec_nac');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('gsanguineo');
		echo $this->Form->input('lesiones');
		echo $this->Form->input('cuales');
		//echo $this->Form->input('Servicio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coaches'), array('controller' => 'coaches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'coaches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
