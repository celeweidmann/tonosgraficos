<?php
App::uses('AppController', 'Controller');
/**
 * Modelos Controller
 *
 * @property Modelo $Modelo
 * @property PaginatorComponent $Paginator
 */
class ModelosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Modelo->recursive = 0;
		$this->set('modelos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
		$this->set('modelo', $this->Modelo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$marcas = $this->Modelo->Marca->find('list');
		$this->set(compact('marcas'));
		if ($this->request->is('post')) {
			$this->Modelo->create();
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
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
		$marcas = $this->Modelo->Marca->find('list');
		$this->set(compact('marcas'));
			
		if (!$this->Modelo->exists($id)) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelo->save($this->request->data)) {
				$this->Session->setFlash(__('The modelo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Modelo.' . $this->Modelo->primaryKey => $id));
			$this->request->data = $this->Modelo->find('first', $options);
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
		$this->Modelo->id = $id;
		if (!$this->Modelo->exists()) {
			throw new NotFoundException(__('Invalid modelo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Modelo->delete()) {
			$this->Session->setFlash(__('The modelo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The modelo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/*
	 * Necesario para hacer los select dependientes
	 * 
	 */
	public function getByMarca() {
		$marca_id = $this->request->data['Producto']['marca_id'];
 
		$modelos = $this->Modelo->find('list', array(
			'conditions' => array('Modelo.marca_id' => $marca_id),
			'recursive' => -1
			));
 
		$this->set('modelos',$modelos);
		$this->layout = 'ajax';
	}
	
	public function getItemByMarca() {
		$marca_id = $this->request->data['Item']['marca_id'];
 
		$modelos = $this->Modelo->find('list', array(
			'conditions' => array('Modelo.marca_id' => $marca_id),
			'recursive' => -1
			));
 
		$this->set('modelos',$modelos);
		$this->layout = 'ajax';
	}
}