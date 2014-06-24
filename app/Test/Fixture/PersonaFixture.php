<?php
/**
 * PersonaFixture
 *
 */
class PersonaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombres' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 70, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'identificacion' => array('type' => 'biginteger', 'null' => true, 'default' => null),
		'direccion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 70, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'celular' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'celular2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'genero' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'fec_nac' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'ocupacion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'gsanguineo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lesiones' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'cuales' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'nombres' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'identificacion' => '',
			'direccion' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor ',
			'celular' => 'Lorem ipsum dolor ',
			'celular2' => 'Lorem ipsum dolor ',
			'email' => 'Lorem ipsum dolor ',
			'genero' => 'Lorem ip',
			'fec_nac' => '2014-06-16',
			'created' => '2014-06-16 02:36:31',
			'ocupacion' => 'Lorem ipsum dolor sit amet',
			'gsanguineo' => 'Lorem ip',
			'lesiones' => 'Lorem ipsum dolor sit amet',
			'cuales' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
