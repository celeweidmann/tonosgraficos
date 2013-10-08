<?php
App::uses('AppModel', 'Model');
/**
 * Recipiente Model
 *
 * @property Producto $Producto
 */
class Recipiente extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'recipiente_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
