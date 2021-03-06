<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
Configure::write('Config.language', 'esp');  

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
		
	
	public $components = array(
        'Session',
        'Auth' => array(
         	'loginAction' => array(
            	'admin' => FALSE,
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array(
            	'admin' => true,
            	'controller' => 'pedidos', 
            	'action' => 'admin_index', 
            	
			),
            'logoutRedirect' => array(
            	'admin' => FALSE,
            	'controller' => 'pages', 
            	'action' => 'inicio'
            	
			),
			'authorize' => array('Controller')
        )
    );
	
	public function isAuthorized($user) {
 	   // Admin can access every action
    	if (isset($user['role']) && $user['role'] === 'admin') {
        	return true;
    	}
    	// Default deny
    	return true;
	}
	
	public function beforeFilter() {
    	if ((isset($this->params['prefix']) && ($this->params['prefix'] == 'admin'))) {
	        $this->layout = 'admin';
    	} else {
    		$this->layout = 'cliente';
    	}
	}
	
	function isAdmin(){
		$this -> loadModel('User');
		$role = $this -> User -> findById($this -> Session -> read('Auth.User.role'));
        if($role != 'admin') {
        	$this->layout = 'cliente';
			return $this->redirect('/users/logout');
		}
	}
	
/*
    public function beforeFilter() {
		if (AuthComponent::user('role') === 'admin') {
        	$this -> layout = 'admin';
		}
        $this -> layout = 'default';
        $this->Auth->allow('index', 'view');
    }
 */
}
