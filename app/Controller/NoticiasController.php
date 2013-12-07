<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 * @property PaginatorComponent $Paginator
 */
class NoticiasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('inicio');
    }

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Noticia->recursive = 0;
		$this->set('noticias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
		$this->set('noticia', $this->Noticia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this -> request -> is('post')) {
			$this -> Noticia -> create();
			$this -> Noticia -> set($this -> request -> data);
			
			# Se verifica y se setea la imagen
			
			if (isset($this -> request -> data['Noticia']['archivo']['name']) && ($this -> request -> data['Noticia']['archivo']['name'] != '')) {
				$nombreImagen = $this -> request -> data['Noticia']['archivo']['name'];
				$uploadDir = WWW_ROOT . 'img/noticias/';
				$uploadFile = $uploadDir . $nombreImagen;
				if (!move_uploaded_file($this -> request -> data['Noticia']['archivo']['tmp_name'], $uploadFile)) {
					$this -> Session -> setFlash(__('The archivo could not be saved. Please, verify the file.'));
					return $this -> redirect(array('action' => 'admin_add', $this -> request -> data));
				}
				
				$this->request->data['Noticia']['archivo'] = $nombreImagen;
				$this->set('archivo', $nombreImagen);
			} else {
				$this->set('archivo', '');
			}
			
			if ($this->Noticia->save($this->request->data)) {
				$this->Session->setFlash(__('The noticia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
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
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Noticia->save($this->request->data)) {
				$this->Session->setFlash(__('The noticia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
			$this->request->data = $this->Noticia->find('first', $options);
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
		$this->Noticia->id = $id;
		if (!$this->Noticia->exists()) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noticia->delete()) {
			$this->Session->setFlash(__('The noticia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The noticia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function inicio(){
		$this->layout = 'default';
		$noticias = $this->Noticia->find('all', array(
										'conditions' => array(
											'Noticia.publicado =' => true)));
		$this->set('noticias', $noticias);
	}
}
