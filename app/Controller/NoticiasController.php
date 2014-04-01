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
	public $components = array('Paginator', 'Session');
	
	
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
   public function admin_edit($id = null){
       if (!$this->Noticia->exists($id)) {
            throw new NotFoundException(__('Invalid Noticia.'));
        }
        $this->Noticia->set('noticia', $noticia = $this->Noticia->findById($id));
		if (!$noticia) {
            throw new NotFoundException('<div class="alert alert-error">'.__('Invalid noticia.').'</div>');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->Noticia->id = $id;
        
		    #tratamiento de la foto
            $archivo = $this->request->data['Noticia']['archivo'];
		    #Si el usuario selecciono algo nuevo
            if(!$archivo == NULL){
                #Si hubo un error, como el tamaño de archivo demasiado grande.
                if($this->request->data['Noticia']['archivo']['error']!=0){
                    $this->Session->setFlash('<div class="alert alert-error">'.__('The noticia could not be saved. Check the file size.').'</div>');
                }
                #Si el archivo posee una extensión no válida
                elseif(!(($this->request->data['Noticia']['archivo']['type'] == 'image/png') || ($this->request->data['Noticia']['archivo']['type'] == 'image/jpeg'))){
                    $this->Session->setFlash('<div class="alert alert-error">'.__('The archivo could not be saved. Check the file extension.').'</div>');
                    }
                    #Si no hay ningún tipo de error, y el tamaño es mayor a 0
                    elseif( ($this->request->data['Noticia']['archivo']['error'] == 0) && ($this->request->data['Noticia']['archivo']['size'] > 0)){
                        $destino = WWW_ROOT.'img/noticias'.DS;
						
                        if(move_uploaded_file($archivo['tmp_name'], $destino.$archivo['name'])){
                            $this->Session->setFlash('<div class="alert alert-success">'.__('The archivo has been saved.').'</div>');
                            $this->Noticia->set('archivo', $archivo['name']);    
                        }
                    }
            }
            $noticia['Noticia']['archivo'] = $archivo['name'];
            if ($this->Noticia->save($noticia)) {
                $this->Session->setFlash('<div class="alert alert-success">'.__('Your noticia has been updated.').'</div>');
               	$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('<div class="alert alert-error">'.__('Unable to update your noticia.').'</div>');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $noticia;
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
