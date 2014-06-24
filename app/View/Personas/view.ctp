<div class="personas view">
<h2><?php  echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular2'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['celular2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fec Nac'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fec_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupacion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['ocupacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gsanguineo'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['gsanguineo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lesiones'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['lesiones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuales'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['cuales']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), null, __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($persona['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Entities Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['persona_id']; ?></td>
			<td><?php echo $cliente['entities_id']; ?></td>
			<td><?php echo $cliente['cargo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Coaches'); ?></h3>
	<?php if (!empty($persona['Coach'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Coach'] as $coach): ?>
		<tr>
			<td><?php echo $coach['id']; ?></td>
			<td><?php echo $coach['persona_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'coaches', 'action' => 'view', $coach['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'coaches', 'action' => 'edit', $coach['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'coaches', 'action' => 'delete', $coach['id']), null, __('Are you sure you want to delete # %s?', $coach['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Coach'), array('controller' => 'coaches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($persona['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['persona_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Servicios'); ?></h3>
	<?php if (!empty($persona['Servicio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($persona['Servicio'] as $servicio): ?>
		<tr>
			<td><?php echo $servicio['id']; ?></td>
			<td><?php echo $servicio['nombre']; ?></td>
			<td><?php echo $servicio['descripcion']; ?></td>
			<td><?php echo $servicio['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'servicios', 'action' => 'view', $servicio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'servicios', 'action' => 'edit', $servicio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'servicios', 'action' => 'delete', $servicio['id']), null, __('Are you sure you want to delete # %s?', $servicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
