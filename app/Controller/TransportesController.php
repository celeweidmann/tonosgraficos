<?php
App::uses('AppController', 'Controller');
/**
 * Transportes Controller
 *
 * @property Transporte $Transporte
 * @property PaginatorComponent $Paginator
 */
class TransportesController extends AppController {

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
	public function index() {
		$this->Transporte->recursive = 0;
		$this->set('transportes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transporte->exists($id)) {
			throw new NotFoundException(__('Invalid transporte'));
		}
		$options = array('conditions' => array('Transporte.' . $this->Transporte->primaryKey => $id));
		$this->set('transporte', $this->Transporte->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transporte->create();
			if ($this->Transporte->save($this->request->data)) {
				$this->Session->setFlash(__('The transporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transporte could not be saved. Please, try again.'));
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
		if (!$this->Transporte->exists($id)) {
			throw new NotFoundException(__('Invalid transporte'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transporte->save($this->request->data)) {
				$this->Session->setFlash(__('The transporte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transporte could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transporte.' . $this->Transporte->primaryKey => $id));
			$this->request->data = $this->Transporte->find('first', $options);
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
		$this->Transporte->id = $id;
		if (!$this->Transporte->exists()) {
			throw new NotFoundException(__('Invalid transporte'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Transporte->delete()) {
			$this->Session->setFlash(__('The transporte has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transporte could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
