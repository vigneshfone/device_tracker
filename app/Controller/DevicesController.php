<?php
App::uses('AppController', 'Controller');
/**
 * Devices Controller
 *
 * @property Device $Device
 */
class DevicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Device->recursive = 0;
		$this->set('devices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		$this->set('device', $this->Device->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Device->create();
			if ($this->Device->save($this->request->data)) {
				$this->Session->setFlash(__('The device has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.'));
			}
		}
		$employees = $this->Device->Employee->find('list');
		$locations = $this->Device->Location->find('list');
		$deviceTypes = $this->Device->DeviceType->find('list');
		$this->set(compact('employees', 'locations', 'deviceTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Device->save($this->request->data)) {
				$this->Session->setFlash(__('The device has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Device->read(null, $id);
		}
		$employees = $this->Device->Employee->find('list');
		$locations = $this->Device->Location->find('list');
		$deviceTypes = $this->Device->DeviceType->find('list');
		$this->set(compact('employees', 'locations', 'deviceTypes'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		if ($this->Device->delete()) {
			$this->Session->setFlash(__('Device deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Device was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
