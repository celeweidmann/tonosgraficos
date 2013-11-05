<?php
App::uses('AppController', 'Controller');
/**
 * Recipientes Controller
 *
 * @property Recipiente $Recipiente
 * @property PaginatorComponent $Paginator
 */
class RecipientesController extends AppController {

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
		$this->Recipiente->recursive = 0;
		$this->set('recipientes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Recipiente->exists($id)) {
			throw new NotFoundException(__('Invalid recipiente'));
		}
		$options = array('conditions' => array('Recipiente.' . $this->Recipiente->primaryKey => $id));
		$this->set('recipiente', $this->Recipiente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Recipiente->create();
			if ($this->Recipiente->save($this->request->data)) {
				$this->Session->setFlash(__('The recipiente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipiente could not be saved. Please, try again.'));
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
		if (!$this->Recipiente->exists($id)) {
			throw new NotFoundException(__('Invalid recipiente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Recipiente->save($this->request->data)) {
				$this->Session->setFlash(__('The recipiente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recipiente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Recipiente.' . $this->Recipiente->primaryKey => $id));
			$this->request->data = $this->Recipiente->find('first', $options);
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
		$this->Recipiente->id = $id;
		if (!$this->Recipiente->exists()) {
			throw new NotFoundException(__('Invalid recipiente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recipiente->delete()) {
			$this->Session->setFlash(__('The recipiente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The recipiente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
