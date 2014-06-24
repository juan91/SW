<div class="servicios view">
<h2><?php  echo __('Servicio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Servicio'), array('action' => 'edit', $servicio['Servicio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Servicio'), array('action' => 'delete', $servicio['Servicio']['id']), null, __('Are you sure you want to delete # %s?', $servicio['Servicio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servicios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Servicio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($servicio['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Identificacion'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Celular2'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Genero'); ?></th>
		<th><?php echo __('Fec Nac'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Ocupacion'); ?></th>
		<th><?php echo __('Gsanguineo'); ?></th>
		<th><?php echo __('Lesiones'); ?></th>
		<th><?php echo __('Cuales'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($servicio['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['nombres']; ?></td>
			<td><?php echo $persona['apellidos']; ?></td>
			<td><?php echo $persona['identificacion']; ?></td>
			<td><?php echo $persona['direccion']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['celular']; ?></td>
			<td><?php echo $persona['celular2']; ?></td>
			<td><?php echo $persona['email']; ?></td>
			<td><?php echo $persona['genero']; ?></td>
			<td><?php echo $persona['fec_nac']; ?></td>
			<td><?php echo $persona['created']; ?></td>
			<td><?php echo $persona['ocupacion']; ?></td>
			<td><?php echo $persona['gsanguineo']; ?></td>
			<td><?php echo $persona['lesiones']; ?></td>
			<td><?php echo $persona['cuales']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), null, __('Are you sure you want to delete # %s?', $persona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
