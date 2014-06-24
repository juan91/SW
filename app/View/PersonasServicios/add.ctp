<style type="text/css">
#nom_per{

	color: #515245;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: -20px;
	background: #00A5F4;
	width:400px;
	padding: 1px 0px 0px 10px;
	display: none;
  border-radius: 3px;
}
</style>
<div class="actions">
  <h3><?php echo __('Actions'); ?></h3>
  <ul>

    <li><?php echo $this->Html->link(__('List Personas Servicios'), array('action' => 'index')); ?></li>
    <li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Servicios'), array('controller' => 'servicios', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Servicio'), array('controller' => 'servicios', 'action' => 'add')); ?> </li>
  </ul>
</div>
<div class="personasServicios form">
<?php echo $this->Form->create('PersonasServicio'); ?>
	<fieldset>
		<legend><?php echo __('Add Personas Servicio'); ?></legend>

        <a id="lis_per" href="<?php echo $this->Html->url("/personas/sel")?>" target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=500,top=100'); return false;">Seleccionar Cliente
        	<?php echo $this->Html->image('search_plus.png')?></a>
                <?php
                    echo "<br><b>Nombre Cliente:</b> <div id='nom_per'></div> </h4><br>";
                    echo $this->Form->hidden('persona_id',array('value'=>0,"id"=>"UsuarioPersonaId"));
                ?>
     <?php      
     echo $this->Form->input('servicio_id',array('id'=>"pago","label"=>"modalidad","empty"=>"tipo de pago"));
    //echo $this->Form->input('valor',array("id"=>"dias"));
  ?>
 <div id="dias"></div>
  <?php
    $this->Js->get('#pago')->event(
    'change',
    $this->Js->request(
    array('controller' => 'PersonasServicios', 'action' => 'getValor'),
    array(
    'update' => '#dias',
    'async' => true,
    'dataExpression' => true,
    'method' => 'post',
    'data' => $this->Js->serializeForm(array('isForm' => true, 'inline' => true))
    )
    )
    );
    
		echo $this->Form->input('fec_ini',array("label"=>"Fecha Inicio"));
    
       echo $this->Js->writeBuffer();
		echo $this->Form->input('fec_fin',array('label'=>'Fecha Fin'));
		echo $this->Form->input('sesiones');
    echo $this->Form->input('activo');
		echo $this->Form->input('observaciones');
  
  $sizes = array('s' => 'Small', 'm' => 'Medium', 'l' => 'Large');
echo $this->Form->input(
    'size',
    array('options' => $sizes, 'default' => 'm')
);

echo $this->Form->day('created');

	?>
	</fieldset>
<?php echo $this->Form->end(__('GUARDAR')); ?>
</div>

<script>

$(document ).ready(function() {
   
function mifecha(){
  $("#PersonasServicioFecIniMonth").change(function() {   
        alert("Thanks for clicking.");
    });
}

});



 
  //al evento click del icono para seleccionar personas
  $("#lis_per").click(function(){
     //iniciar timer para ejecutar funcion de consulta
   
       // body...
       startQuery();
    
     
  });
    
  //funcion incializa timer 
  function startQuery() {
    //consultar al servidor cada 1 sg

    var query = setInterval(function(){setPersona()}, 1000);  

  }
  
  //funcion para consultar persona seleccionada y obtener datos persona
  function setPersona() {
      //obtener persona seleccionada
      $.getJSON("http://localhost/EgoGym/Personas_Servicios/get_per_sel", function(data) {
          //si es devuelta una persona
        if(data.nombre != null){
            //setear datos persona en el formulario
          $("#UsuarioPersonaId").val(data.id);
          $("#nom_per").text(data.nombre);

          //dejar de preguntar
          stopQuery();
        }
      });
  }
  //dejar de consultar al servidor para a
  function stopQuery() {
      //detener timer
      $("#nom_per").show("fast",function() {
        // body...
        clearInterval(query);
      });
      
  }

</script>
