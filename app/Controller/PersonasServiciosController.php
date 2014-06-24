<?php
App::uses('AppController', 'Controller');
/**
 * PersonasServicios Controller
 *
 * @property PersonasServicio $PersonasServicio
 */
class PersonasServiciosController extends AppController {

/**
 * index method
 *
 * @return void
 */
public $components = array('Paginator', 'Session', 'RequestHandler');
public $helpers = array('Js');
public $layout="gym";


public function getValor() {
	$category_id = $this->data["PersonasServicio"]["servicio_id"];
	$subcategories =  $this->PersonasServicio->Servicio->find('first', array(
	'conditions' => array('id' => $category_id),
	'recursive' => -1
	));

	$this->set('subcategories',$subcategories);
	$this->layout = 'ajax';
	}


	public function getDateTimeValue($value, $timeFormat) {
       $year = $month = $day = $hour = $min = $meridian = null;
       if (is_array($value)) {
             extract($value);
             if ($meridian === 'pm') {
                 $hour += 12;
             }
             return array($year, $month, $day, $hour, $min, $meridian);
         }

         if (is_numeric($value)) {
             $value = strftime('%Y-%m-%d %H:%M:%S', $value);
         }
         $meridian = 'am';
         $pos = strpos($value, '-');
         if ($pos !== false) {
             $date = explode('-', $value);
             $days = explode(' ', $date[2]);
             $day = $days[0];
             $month = $date[1];
             $year = $date[0];
         } else {
             $days[1] = $value;
        }
 
         if (!empty($timeFormat)) {
             $time = explode(':', $days[1]);
 
             if ($time[0] >= 12) {
                 $meridian = 'pm';
             }
             $hour = $min = null;
             if (isset($time[1])) {
                 $hour = $time[0];
                 $min = $time[1];
             }
         }
         return array($year, $month, $day, $hour, $min, $meridian);
     }

	public function index() {
		$this->PersonasServicio->recursive = 0;
		$this->set('personasServicios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PersonasServicio->exists($id)) {
			throw new NotFoundException(__('Invalid personas servicio'));
		}
		$options = array('conditions' => array('PersonasServicio.' . $this->PersonasServicio->primaryKey => $id));
		$this->set('personasServicio', $this->PersonasServicio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonasServicio->create();
			if ($this->PersonasServicio->save($this->request->data)) {
				$this->Session->setFlash(__('The personas servicio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personas servicio could not be saved. Please, try again.'));
			}
		}
		$personas = $this->PersonasServicio->Persona->find('list');
		$servicios = $this->PersonasServicio->Servicio->find('list',array('fields'=>array('id','nombre')));
		$this->set(compact('personas', 'servicios'));
		 $this->Session->destroy ();
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PersonasServicio->exists($id)) {
			throw new NotFoundException(__('Invalid personas servicio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonasServicio->save($this->request->data)) {
				$this->Session->setFlash(__('The personas servicio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personas servicio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PersonasServicio.' . $this->PersonasServicio->primaryKey => $id));
			$this->request->data = $this->PersonasServicio->find('first', $options);
		}
		$personas = $this->PersonasServicio->Persona->find('list');
		$servicios = $this->PersonasServicio->Servicio->find('list');
		$this->set(compact('personas', 'servicios'));
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
		$this->PersonasServicio->id = $id;
		if (!$this->PersonasServicio->exists()) {
			throw new NotFoundException(__('Invalid personas servicio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PersonasServicio->delete()) {
			$this->Session->setFlash(__('Personas servicio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personas servicio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


  //devuelve la persona seleccionada en formato json
        public function get_per_sel() {
            $per = array(
                'id'=>$this->Session->read('sel.per_id'), 
                'nombre'=>$this->Session->read('sel.per_nom')
            );
            $this->set('per', $per);
            $this->set('_serialize', 'per');
        }
}
