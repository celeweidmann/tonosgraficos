<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 * @property PaginatorComponent $Paginator
 */
class ItemsController extends AppController {

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
	public function admin_index() {
		$this->Item->recursive = 0;
		$this->set('items', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
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
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
			$this->request->data = $this->Item->find('first', $options);
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
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('The item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'solicitar'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('The item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'solicitar'));
	}

	/**
 	 * solicitar method
 	 *
 	 * @throws NotFoundException
 	 * @param string $id
 	 * @return void
 	 */
	public function solicitar($id=null) {
		$marcas = $this -> Item -> Producto -> Cartucho -> Modelo -> Marca -> find('list');
		$modelos = $this -> Item -> Producto -> Cartucho -> Modelo -> find('list');
		$cartuchos = $this -> Item -> Producto -> Cartucho -> find('list');
		$tintas = $this -> Item -> Producto->Tinta->find('list');
		$recipientes = $this-> Item -> Producto->Recipiente->find('list');
		//$this -> set(compact('marcas', 'modelos', 'cartuchos', 'tintas', 'recipientes'));
		
		//Se obtienen los items del mismo pedido para listarlos
		$items = $this->Item->find('all', array(
								'conditions' => array(	'pedido_id' => $id)));
								
		$this -> set(compact('marcas', 'modelos', 'cartuchos', 'tintas', 'recipientes', 'items'));
		

	//	debug($this->Item->Producto->Tinta);
		
		if ($this->request->is('post')) {
			$this->Item->set('pedido_id', $id);
			
			//Se obtiene el producto a partir de la selección que hizo el usuario.
			$productos = $this->Item->Producto->find('first', array(
							'conditions' => array(	'Producto.cartucho_id' => $this->request->data['Item']['cartucho_id'],
													'Producto.tinta_id' => $this->request->data['Item']['tinta'],
													'Producto.recipiente_id' => $this->request->data['Item']['recipiente'])));
			//debug($productos);
					
			$this->Item->create();

			if ($this->Item->save($this->request->data )) {
				$this->Item->saveField('costo', $productos['Producto']['precio'] );
				$this->Item->saveField('producto_id', $productos['Producto']['id']);
				$this->Item->saveField('pedido_id', $id);
				
				$tinta = $this->Item->Producto->Tinta->find('first', array(
																	'conditions' => array(
																		'id' =>$this->request->data['Item']['tinta'] 
																				)));
				$this->Item->saveField('tinta', $tinta['Tinta']['name']);
				
				$recipiente = $this->Item->Producto->Recipiente->find('first', array(
																	'conditions' => array(
																		'id' =>$this->request->data['Item']['recipiente'] 
																				)));
				$this->Item->saveField('recipiente', $recipiente['Recipiente']['name']);
				
				//$this->Session->setFlash(__('The item has been saved.'));
				return $this->redirect(array('controller' => 'items', 'action' => 'solicitar', $id));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
     }	
}
