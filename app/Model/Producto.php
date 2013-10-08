<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Cartucho $Cartucho
 * @property Tinta $Tinta
 * @property Recipiente $Recipiente
 * @property Item $Item
 */
class Producto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cartucho_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tinta_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'recipiente_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cartucho' => array(
			'className' => 'Cartucho',
			'foreignKey' => 'cartucho_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tinta' => array(
			'className' => 'Tinta',
			'foreignKey' => 'tinta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Recipiente' => array(
			'className' => 'Recipiente',
			'foreignKey' => 'recipiente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Item' => array(
			'className' => 'Item',
			'foreignKey' => 'producto_id',
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
