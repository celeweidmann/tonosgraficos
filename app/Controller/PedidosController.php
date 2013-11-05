<?php
App::uses('AppController', 'Controller');
/**
 * Pedidos Controller
 *
 * @property Pedido $Pedido
 * @property PaginatorComponent $Paginator
 */
class PedidosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function isAuthorized($user) {
    	// All registered users can add pedidos
    	if ($this->action === 'add') {
	        return true;
    	}
    	// The owner of a pedido can edit and delete it
    	if (in_array($this->action, array('edit', 'delete'))) {
        	$pedidoId = $this->request->params['pass'][0];
        	if ($this->Pedido->isOwnedBy($pedidoId, $user['id'])) {
            	return true;
        	}
    	}
		return parent::isAuthorized($user);
	}

/**
 * index method
 *
 * @return void
 */
/*	public function index() {
		$this->Pedido->recursive = 0;
		$this->set('pedidos', $this->Paginator->paginate());
	}
*/
/**
 * indexUser method
 *
 * @return void
 */
	public function index() {
		$this->Pedido->recursive = 0;
		
		$pedidos = $this->Pedido->find('all', array(
										'conditions' => array(
											'user_id' => $this->Pedido->User->read())));
		$this->set('pedidos',  $this->Paginator->paginate($pedidos));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pedido->exists($id)) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		$options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
		$this->set('pedido', $this->Pedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// para lista de opciones en la vista
		$estados = $this->Pedido->Estado->find('list');
		$this->set(compact('estados'));
		$transportes = $this->Pedido->Transporte->find('list');
		$this->set(compact('transportes'));
		$users = $this->Pedido->User->find('list');
		$this->set(compact('users'));
		if ($this->request->is('post')) {
			$this->request->data['Pedido']['user_id'] = $this->Auth->user('id');
			$this->Pedido->create();
			if ($this->Pedido->save($this->request->data)) {
				$this->Session->setFlash(__('The pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->Pedido->exists($id)) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pedido->save($this->request->data)) {
				$this->Session->setFlash(__('The pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pedido.' . $this->Pedido->primaryKey => $id));
			$this->request->data = $this->Pedido->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pedido->id = $id;
		if (!$this->Pedido->exists()) {
			throw new NotFoundException(__('Invalid pedido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pedido->delete()) {
			$this->Session->setFlash(__('The pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * agregar method
 *
 * @return void
 */
	public function agregar() {
		// para lista de opciones en la vista
		$estados = $this->Pedido->Estado->find('list');
		$this->set(compact('estados'));
		$transportes = $this->Pedido->Transporte->find('list');
		$this->set(compact('transportes'));
		
		//$users = $this->Pedido->User->find('list');
		$users = $this->Pedido->User->find('first', array(
										'conditions' => array('User.id' => $this->Auth->user('id'))));
		$this->set(compact('users'));
		$this->set('id', $this->Pedido->id);
		
		if ($this->request->is('post')) {
			$this->request->data['Pedido']['user_id'] = $this->Auth->user('id');
			$this->Pedido->create();
			if ($this->Pedido->save($this->request->data)) {
				
				//Al crearse el pedido se encuentra en estado=BORRADOR
				$this->Pedido->saveField('estado_id', 1);
				
				$this->Session->setFlash(__('The pedido has been saved.'));
				//return $this->redirect(array('action' => 'index'));
				//return $this->redirect(array('controller' => 'items', 'action' =>'solicitar', $this->Pedido->data['Pedido']['id']));
				return $this->redirect(array('controller' => 'items', 'action' =>'solicitar', $this->Pedido->id));
			} else {
				$this->Session->setFlash(__('The pedido could not be saved. Please, try again.'));
			}
		}
	}

 /**
  * confirmar method
  *
  * @return void
  */
	public function confirmar($id=null){
		$this->autoRender = false;
		$pedidos = $this->Pedido->findById($id);
		$this->Pedido->read(null, $pedidos['Pedido']['id']);
		$this->Pedido->saveField('estado_id', 2);
		//Enviar mail a TonosGráficos y al usuario
		
		return $this->redirect(array('controller' => 'pedidos', 'action' =>'index'));	
	}

 /**
  * cancelar method
  *
  * @return void
  */
	public function cancelar($id=null){
		$this->autoRender = false;
		$pedido = $this->Pedido->findById($id);
		
		//Eliminar Items del pedido
		$items = $this->Pedido->Item->find('all', array(
												'conditions' => array(
													'Item.pedido_id' => $id)));
		foreach ($items as $item):
			$this->Pedido->Item->delete($item['Item']['id']);
		endforeach;
		
		//Eliminar Pedido
		$this->Pedido->delete($id);
		
		return $this->redirect(array('controller' => 'pedidos', 'action' =>'index'));	
	}
}
