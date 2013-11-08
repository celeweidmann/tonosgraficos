<?php
App::uses('AppController', 'Controller');
/**
 * Cartuchos Controller
 *
 * @property Cartucho $Cartucho
 * @property PaginatorComponent $Paginator
 */
class CartuchosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	function beforeFilter() {
    	parent::beforeFilter();
	}

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cartucho->recursive = 0;
		$this->set('cartuchos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cartucho->exists($id)) {
			throw new NotFoundException(__('Invalid cartucho'));
		}
		$options = array('conditions' => array('Cartucho.' . $this->Cartucho->primaryKey => $id));
		$this->set('cartucho', $this->Cartucho->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
/*	public function admin_add() {
		$modelos = $this->Cartucho->Modelo->find('list');
		$this->set(compact('modelos'));
		if ($this->request->is('post')) {
			$this->Cartucho->create();
			if ($this->Cartucho->save($this->request->data)) {
				$this->Session->setFlash(__('The cartucho has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cartucho could not be saved. Please, try again.'));
			}
		}
	}
*/
	public function admin_add() {
		if($this->isAdmin()){
			$modelos = $this->Cartucho->Modelo->find('list');
			$this->set(compact('modelos'));
			if ($this->request->is('post')) {
				$this->Cartucho->create();
				if ($this->Cartucho->save($this->request->data)) {
					$this->Session->setFlash(__('The cartucho has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The cartucho could not be saved. Please, try again.'));
				}
			}
		}
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$modelos = $this->Cartucho->Modelo->find('list');
		$this->set(compact('modelos'));
		if (!$this->Cartucho->exists($id)) {
			throw new NotFoundException(__('Invalid cartucho'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cartucho->save($this->request->data)) {
				$this->Session->setFlash(__('The cartucho has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cartucho could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cartucho.' . $this->Cartucho->primaryKey => $id));
			$this->request->data = $this->Cartucho->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Cartucho->id = $id;
		if (!$this->Cartucho->exists()) {
			throw new NotFoundException(__('Invalid cartucho'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cartucho->delete()) {
			$this->Session->setFlash(__('The cartucho has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cartucho could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/*
	 * Necesario para hacer los select dependientes
	 * 
	 */
	public function getByModelo() {
		$modelo_id = $this->request->data['Producto']['modelo_id'];
 
		$cartuchos = $this->Cartucho->find('list', array(
			'conditions' => array('Cartucho.modelo_id' => $modelo_id),
			'recursive' => -1
			));
 
		$this->set('cartuchos',$cartuchos);
		$this->layout = 'ajax';
	}
	
	public function getItemByModelo() {
		$modelo_id = $this->request->data['Item']['modelo_id'];
 
		$cartuchos = $this->Cartucho->find('list', array(
			'conditions' => array('Cartucho.modelo_id' => $modelo_id),
			'recursive' => -1
			));
 
		$this->set('cartuchos',$cartuchos);
		$this->layout = 'ajax';
	}
}