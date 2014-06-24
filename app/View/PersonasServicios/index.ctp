<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Personas Servicio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
	</ul>
</div>

	<h2><?php echo __('Personas Servicios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
			<th><?php echo $this->Paginator->sort('Fecha Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('Fecha Fin'); ?></th>
			<th><?php echo $this->Paginator->sort('Sessiones'); ?></th>
			<th><?php echo $this->Paginator->sort('Valor'); ?></th>
			<th><?php echo $this->Paginator->sort('Activo'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servicio'); ?></th>
			<th><?php echo $this->Paginator->sort('Observaciones'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($personasServicios as $personasServicio): ?>
	<tr>
		<!-- <td><?php echo h($personasServicio['PersonasServicio']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($personasServicio['PersonasServicio']['fec_ini']); ?>&nbsp;</td>
		<td><?php echo h($personasServicio['PersonasServicio']['fec_fin']); ?>&nbsp;</td>
		<td><?php echo h($personasServicio['PersonasServicio']['sesiones']); ?>&nbsp;</td>
		<td><?php echo h($personasServicio['PersonasServicio']['valor']); ?>&nbsp;</td>		
		<td><?php echo h($personasServicio['PersonasServicio']['activo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personasServicio['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $personasServicio['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($personasServicio['Servicio']['nombre'], array('controller' => 'servicios', 'action' => 'view', $personasServicio['Servicio']['id'])); ?>
		</td>
		<td><?php echo h($personasServicio['PersonasServicio']['observaciones']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personasServicio['PersonasServicio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personasServicio['PersonasServicio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personasServicio['PersonasServicio']['id']), null, __('Are you sure you want to delete # %s?', $personasServicio['PersonasServicio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
