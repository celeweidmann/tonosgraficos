<?php
App::uses('AppController', 'Controller');
/**
 * Tintas Controller
 *
 * @property Tinta $Tinta
 * @property PaginatorComponent $Paginator
 */
class TintasController extends AppController {

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
		$this->Tinta->recursive = 0;
		$this->set('tintas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tinta->exists($id)) {
			throw new NotFoundException(__('Invalid tinta'));
		}
		$options = array('conditions' => array('Tinta.' . $this->Tinta->primaryKey => $id));
		$this->set('tinta', $this->Tinta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tinta->create();
			if ($this->Tinta->save($this->request->data)) {
				$this->Session->setFlash(__('The tinta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tinta could not be saved. Please, try again.'));
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
		if (!$this->Tinta->exists($id)) {
			throw new NotFoundException(__('Invalid tinta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tinta->save($this->request->data)) {
				$this->Session->setFlash(__('The tinta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tinta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tinta.' . $this->Tinta->primaryKey => $id));
			$this->request->data = $this->Tinta->find('first', $options);
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
		$this->Tinta->id = $id;
		if (!$this->Tinta->exists()) {
			throw new NotFoundException(__('Invalid tinta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tinta->delete()) {
			$this->Session->setFlash(__('The tinta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tinta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
