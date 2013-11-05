<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public $helpers = array('Js');
	
/**
 * index method
 *
 * @return void
 */
/*	public function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$cartucho = $this->Producto->Cartucho->find('list');
		$this->set(compact('cartuchos'));
		$tintas = $this->Producto->Tinta->find('list');
		$this->set(compact('tintas'));
		$recipientes = $this->Producto->Recipiente->find('list');
		$this->set(compact('recipientes'));		
		
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$cartucho = $this->Producto->Cartucho->find('list');
		$this->set(compact('cartuchos'));
		$tintas = $this->Producto->Tinta->find('list');
		$this->set(compact('tintas'));
		$recipientes = $this->Producto->Recipiente->find('list');
		$this->set(compact('recipientes'));		
		
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function adin_view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		$cartuchos = $this->Producto->Cartucho->find('list');
		$this->set(compact('cartuchos'));
		
		//$modelos = $this->Producto->Cartucho->Modelo->find('list');
		//$this->set(compact('modelos'));
		
		$tintas = $this->Producto->Tinta->find('list');
		$this->set(compact('tintas'));
		$recipientes = $this->Producto->Recipiente->find('list');
		$this->set(compact('recipientes'));		
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
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
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('The producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
 	 * delete method
 	 *
 	 * @throws NotFoundException
 	 * @param string $id
 	 * @return void
 	 */
	public function solicitar() {
		$marcas = $this -> Producto -> Cartucho -> Modelo -> Marca -> find('list');
		$modelos = $this -> Producto -> Cartucho -> Modelo -> find('list');
		$cartuchos = $this -> Producto -> Cartucho -> find('list');
		$tintas = $this->Producto->Tinta->find('list');
		$recipientes = $this->Producto->Recipiente->find('list');
		$this -> set(compact('marcas', 'modelos', 'cartuchos', 'tintas', 'recipientes'));
     }	

}