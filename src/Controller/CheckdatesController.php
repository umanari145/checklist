<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Checkdates Controller
 *
 * @property \App\Model\Table\CheckdatesTable $Checkdates
 */
class CheckdatesController extends AppController
{
	public $uses = array('Checklist');

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('checkdates', $this->paginate($this->Checkdates));
        $this->set('_serialize', ['checkdates']);
    }

    /**
     * View method
     *
     * @param string|null $id Checkdate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checkdate = $this->Checkdates->get($id, [
            'contain' => []
        ]);
        $this->set('checkdate', $checkdate);
        $this->set('_serialize', ['checkdate']);
    }

    /**
     * View method
     *
     * @param string|null $id Checkdate id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function check()
    {
    	$poststable = TableRegistry::get('checklist');
    	$checkdate = $poststable->getAllCheckList();
    	var_dump($checkdate);
    	exit;

    	$this->set('checkdate', $checkdate);
    	$this->set('_serialize', ['checkdate']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checkdate = $this->Checkdates->newEntity();
        if ($this->request->is('post')) {
            $checkdate = $this->Checkdates->patchEntity($checkdate, $this->request->data);
            if ($this->Checkdates->save($checkdate)) {
                $this->Flash->success(__('The checkdate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The checkdate could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('checkdate'));
        $this->set('_serialize', ['checkdate']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Checkdate id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checkdate = $this->Checkdates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $checkdate = $this->Checkdates->patchEntity($checkdate, $this->request->data);
            if ($this->Checkdates->save($checkdate)) {
                $this->Flash->success(__('The checkdate has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The checkdate could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('checkdate'));
        $this->set('_serialize', ['checkdate']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Checkdate id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $checkdate = $this->Checkdates->get($id);
        if ($this->Checkdates->delete($checkdate)) {
            $this->Flash->success(__('The checkdate has been deleted.'));
        } else {
            $this->Flash->error(__('The checkdate could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
