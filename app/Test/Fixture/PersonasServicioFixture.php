<?php
/**
 * PersonasServicioFixture
 *
 */
class PersonasServicioFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fec_ini' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'fec_fin' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'sesiones' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'activo' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'persona_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'servicio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_servicios_personas_personas1_idx' => array('column' => 'persona_id', 'unique' => 0),
			'fk_servicios_personas_servicios1_idx' => array('column' => 'servicio_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fec_ini' => '2014-06-16 05:13:08',
			'fec_fin' => '2014-06-16 05:13:08',
			'sesiones' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'activo' => 1,
			'persona_id' => 1,
			'servicio_id' => 1
		),
	);

}
