<style type="text/css">
#buscar_per{

margin:90px auto -60px auto;
background: transparent;
width: 600px;
text-align: center;
}
#buscar_per input{
	width: 450px;
}



</style>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
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
<div id="buscar_per">
<?php  
	echo $this->Form->create('Persona', array('action'=>'buscarPersona'));
	echo $this->Form->input('bus',array("class"=>"buscar","label"=>false,"placeholder"=>"Ingrese Nombre o Cedula para realizar la búqueda"));
?>
</div>

	<table cellpadding="0" cellspacing="0">
	<tr>
		<!-- y finaliza por -->
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('celular2'); ?></th> -->
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('fec_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupacion'); ?></th>
			<th><?php echo $this->Paginator->sort('gsanguineo'); ?></th>
			<th><?php echo $this->Paginator->sort('lesiones'); ?></th>
			<th><?php echo $this->Paginator->sort('cuales'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['celular']); ?>&nbsp;</td>
		<!-- <td><?php echo h($persona['Persona']['celular2']); ?>&nbsp;</td> -->
		<td><?php echo h($persona['Persona']['email']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['genero']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['fec_nac']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['created']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['ocupacion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['gsanguineo']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['lesiones']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['cuales']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $persona['Persona']['id']), null, __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?>
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
