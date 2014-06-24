<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 */
class PersonasController extends AppController {

/**
 * index method
 *
 * @return void
 */
public $components = array('Paginator', 'Session', 'RequestHandler');
public $layout="gym";
	public function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('The persona has been saved',true),'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.'));
			}
		}
		$servicios = $this->Persona->Servicio->find('list');
		$this->set(compact('servicios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash(__('The persona has been saved',true),'success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
		}
		$servicios = $this->Persona->Servicio->find('list');
		$this->set(compact('servicios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Session->setFlash(__('Persona deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Persona was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	   public function sel() {
            $this->layout="sel";
            if(!isset($_GET['sel_id'])){
		$this->Persona->recursive = 0;
                if($this->request->is('post')) {
                       $par = $this->data['bus'];               //$par = parametro de busqueda  
                       $r = $this->paginate("Persona", 
                            array("OR" => 
                                array(
                                      "Persona.identificacion" => $par,
                                      "Persona.nombres like" => "{$par}%",
                                      "Persona.apellidos like" => "{$par}%"      
                            ))); 
                       if(count($r) == 0){
                            $r = $this->paginate("Persona");
                            $this->Session->setFlash(__('Sin resultados'));
                       }
                }else{
                    $r = $this->paginate("Persona");
                }
                    $this->set("personas",$r); 
            }else{
                //guardar seleccion
                $this->Session->write('sel.per_id',$_GET['sel_id']);
                $this->Session->write('sel.per_nom',$_GET['sel_nom']);
                //cerrar ventana seleccion
                //007 opener.location.reload(); -> anteriormente se usaba para refrescar pagina
                echo "<script>window.close();</script>";
            }
	}

	 public function buscarPersona() {
		$this->Persona->recursive = 0;			
                if($this->request->is('post')) {  
                       $par = $this->data['Persona']['bus'];               //$par = parametro de busqueda  
                       $r = $this->paginate("Persona", 
                            array("OR" => 
                                array(
                                      "Persona.identificacion" => $par,
                                      "Persona.nombres like" => "{$par}%",
                                      "Persona.apellidos like" => "{$par}%"      
                            ))); 
                       if(count($r) == 0){
                            $r = $this->paginate("Persona");
                            $this->Session->setFlash(__('Sin resultados'));
                       }

                }else{
                    $r = $this->paginate("Persona");
                }

                    $this->set("personas",$r); 
                    $this->autoRender = false;
                    $this->render('index');

        }
	

}
