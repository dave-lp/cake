<?php
	class AddressesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

	public function index() {
//        $this->set('addresses', $this->Address->find('all'));
	$this->set('addresses', $this->Address->find('all', array('order' => 'Address.first_name ASC')));


	//	print_r($this->Address->find('all'));
	//	die();
    }

    public function view($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Invalid address'));
    	}
    
    	$address = $this->Address->findById($id);
    	if (!$address) {
    		throw new NotFoundException(__('Invalid address'));
    	}
    	$this->set('address', $address);
    }

    public function add() {
    	if ($this->request->is('post')) {
    		$this->Address->create();
    		if ($this->Address->save($this->request->data)) {
    			$this->Session->setFlash(__('Your Contact Info has been saved.'));
    			return $this->redirect(array('action' => 'index'));
    		}
    	}
    }

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid address'));
		}

		$address = $this->Address->findById($id);
		if (!$address) {
			throw new NotFoundException(__('Invalid address'));
		}

		if ($this->request->is(array('address', 'put'))) {
			$this->Address->id = $id;
			if ($this->Address->save($this->request->data)) {
				$this->Session->setFlash(__('Your address has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your address.'));
		}

		if (!$this->request->data) {
			$this->request->data = $address;
		}
	}

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Address->delete($id)) {
			$this->Session->setFlash(__('The address with id: %s has been deleted.', h($id)));
			return $this->redirect(array('action' => 'index'));
		}
	}

}
?>