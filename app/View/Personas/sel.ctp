<?php $this->layout="sel"; ?>
<div id="sel_buscar">
        <form method="post" action="<?php $this->Html->url('index')?>">
            <input style="background-repeat: no-repeat; background-position: right; background-image: url('img/consulta')" size="28" name="bus" placeholder="Ingrese cualquier término para realizar la búqueda" >
        </form>
 </div>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Identificación'); ?></th>
			<th><?php echo $this->Paginator->sort('Nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th class="actions"><?php echo __('Seleccionar'); ?></th>
                        
	</tr>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellidos']); ?>&nbsp;</td>
		<td class="actions">
                    <?php echo $this->Html->link($this->Html->image('accept.png'), array('action' => "sel?sel_id={$persona['Persona']['id']}&sel_nom={$persona['Persona']['nombres']} {$persona['Persona']['apellidos']}"), array("escape"=>FALSE, "title"=>"Seleccionar")); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
        <div class="paging">
            
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

