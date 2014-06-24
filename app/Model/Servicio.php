<?php
App::uses('AppModel', 'Model');
/**
 * Servicio Model
 *
 * @property Persona $Persona
 */
class Servicio extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Persona' => array(
			'className' => 'Persona',
			'joinTable' => 'personas_servicios',
			'foreignKey' => 'servicio_id',
			'associationForeignKey' => 'persona_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
