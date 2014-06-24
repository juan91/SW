<?php
App::uses('AppController', 'Controller');
/**
 * Servicios Controller
 *
 * @property Servicio $Servicio
 */
class ServiciosController extends AppController {
public $helpers = array('Js');
/**
 * index method
 *
 * @return void
 */
public $layout="gym";
	public function index() {
		$this->Servicio->recursive = 0;
		$this->set('servicios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function getValor() {
	$category_id = $this->data["User"]["pago_id"];
	$subcategories =  $this->User->Pago->find('first', array(
	'conditions' => array('id' => $category_id),
	'recursive' => -1
	));

	$this->set('subcategories',$subcategories);
	$this->layout = 'ajax';
	}
	public function view($id = null) {
		if (!$this->Servicio->exists($id)) {
			throw new NotFoundException(__('Invalid servicio'));
		}
		$options = array('conditions' => array('Servicio.' . $this->Servicio->primaryKey => $id));
		$this->set('servicio', $this->Servicio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Servicio->create();
			if ($this->Servicio->save($this->request->data)) {
				$this->Session->setFlash(__('The servicio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servicio could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Servicio->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Servicio->exists($id)) {
			throw new NotFoundException(__('Invalid servicio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Servicio->save($this->request->data)) {
				$this->Session->setFlash(__('The servicio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The servicio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Servicio.' . $this->Servicio->primaryKey => $id));
			$this->request->data = $this->Servicio->find('first', $options);
		}
		$personas = $this->Servicio->Persona->find('list');
		$this->set(compact('personas'));
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
		$this->Servicio->id = $id;
		if (!$this->Servicio->exists()) {
			throw new NotFoundException(__('Invalid servicio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Servicio->delete()) {
			$this->Session->setFlash(__('Servicio deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Servicio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
