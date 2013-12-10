<?php
class Contacto extends AppModel {

    public $name = 'Contacto';
    public $useTable = false;
    public $validate = array(
        'subject' => 'notEmpty',
        'email' => array (
            'rule'          => 'email',
            'message'       => 'Debe escribir una dirección de email válida.'
        ),
        'nombre' => array(
            'rule'          => 'notEmpty',
            'allowEmpty'    => false,
            'message'       => 'Debe escribir su nombre.'
        ),
        'mensaje' => array(
            'rule'          => 'notEmpty',
            'allowEmpty'    => false,
            'message'       => 'Debe escribir un mensaje a enviar.'
        ),
    );

    var $_schema = array(
        'email'     => array('type'=>'string', 'length'=>100),
        'nombre'    => array('type'=>'string', 'length'=>100), 
        'subject'   => array('type'=>'string', 'length'=>100), 
        'mensaje'   => array('type'=>'text', 'length'=>800),
        'consulta' => array(),
    );
}