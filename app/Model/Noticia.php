<?php
App::uses('AppModel', 'Model');
/**
 * Noticia Model
 *
 * @property Item $Item
 */
class Noticia extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
 
 	public $useTable = 'noticias';
 
	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'archivo' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Debe seleccionar un archivo',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	 	'link' => array(
        	'rule' => 'url',
        	'message' => 'Debe ser una url válida.',
    	)
	);

}
