<?php
App::uses('PersonasServicio', 'Model');

/**
 * PersonasServicio Test Case
 *
 */
class PersonasServicioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personas_servicio',
		'app.persona',
		'app.cliente',
		'app.coach',
		'app.user',
		'app.servicio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonasServicio = ClassRegistry::init('PersonasServicio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonasServicio);

		parent::tearDown();
	}

}
