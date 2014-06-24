<div class="personasServicios view">
<h2><?php  echo __('Personas Servicio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Ini'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['fec_ini']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Fin'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['fec_fin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sesiones'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['sesiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activo'); ?></dt>
		<dd>
			<?php echo h($personasServicio['PersonasServicio']['activo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasServicio['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasServicio['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personasServicio['Servicio']['id'], array('controller' => 'servicios', 'action' => 'view', $personasServicio['Servicio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personas Servicio'), array('action' => 'edit', $personasServicio['PersonasServicio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personas Servicio'), array('action' => 'delete', $personasServicio['PersonasServicio']['id']), null, __('Are you sure you want to delete # %s?', $personasServicio['PersonasServicio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas Servicios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personas Servicio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>
