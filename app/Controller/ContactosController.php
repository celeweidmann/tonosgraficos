<?php
App::uses('CakeEmail', 'Network/Email');

class ContactosController extends AppController {
    public $name = 'Contactos';
    var $components = array('Email');

    public function index(){
    	$this->layout = 'default';
		
        if ($this->request->is('post')) {
            if(isset($this->data['Contacto'])){
                $this->Contacto->set($this->data);          
                # Valido los datos del formulario
                if($this->Contacto->validates()){
                   
                    # Envia la consulta al mail de Compras
                    # ventas@tonosgraficos.com
                    if($this->data['Contacto']['consulta'] == 0){
                        $to = 'ventas@tonosgraficos.com';
						$tipo = 'Compras';
                    } 
                   	# Envia la consulta al mail de Envíos.
                   	# logistica@tonosgraficos.com
                    elseif ($this->data['Contacto']['consulta'] == 1) {
                        $to = 'logistica@tonosgraficos.com';
						$tipo = 'Envíos';
                    }
					# Envia la consulta al mail de Consulta Técnica
					# consultatecnica@tonosgraficos.com	
				   	elseif ($this->data['Contacto']['consulta'] == 2) {
                	    $to = 'consultatecnica@tonosgraficos.com';
						$tipo = 'Consuta Técnica';
                	}
					 # Envia la consulta al mail de Gerencia.
					 # gerencia@tonosgraficos.com
            	    elseif ($this->data['Contacto']['consulta'] == 3) {
                	    $to = 'gerencia@tonosgraficos.com';
                	    $tipo = 'Gerencia';
                	}
					 # Envia la consulta al mail de Administracion.
					 # administracion@tonosgraficos.com
            	    elseif ($this->data['Contacto']['consulta'] == 4) {
                	     $to = 'administracion@tonosgraficos.com';
                	     $tipo = 'Adminstración';
                	}
					
					 # Armo el mensaje para enviar al mail.   
                    $mensaje = 'Enviado por: '.$this->data['Contacto']['nombre']."\n".
                               'Mail de contacto: '.$this->data['Contacto']['email']."\n".
                               'Tipo de consulta: '.$tipo."\n\n".
                               'Consulta: '."\n".$this->data['Contacto']['mensaje'];
					
					
					$header = 'From: ' . $this->data['Contacto']['email'] . " \r\n";
					$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
					$header .= "Mime-Version: 1.0 \r\n";
					$header .= "Content-Type: text/plain; charset=UTF-8";
					
                    if(mail($to, '=?UTF-8?B?'.base64_encode('Consulta Tonos Gráficos').'?=', $mensaje, $header )){
                    		
                    	# Mensaje indicando que la consulta se ha enviado con éxito.
                        $this->Session->setFlash('<div class=" col-md-8 col-md-offset-4 alert alert-success  alert-dismissable"> 
                        					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        					Su consulta ha sido enviada con éxito. Nos comunicaremos a la brevedad. </div>');
                    }
                }
            }
        }
    }

    # Que acciones queremos que no necesiten login
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
}