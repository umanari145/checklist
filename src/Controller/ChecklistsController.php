<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Checklists Controller
 *
 * @property \App\Model\Table\ChecklistsTable $Checklists
 */
class ChecklistsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('checklists', $this->paginate($this->Checklists));
        $this->set('_serialize', ['checklists']);
    }

    /**
     * View method
     *
     * @param string|null $id Checklist id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $checklist = $this->Checklists->get($id, [
            'contain' => []
        ]);
        $this->set('checklist', $checklist);
        $this->set('_serialize', ['checklist']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $checklist = $this->Checklists->newEntity();
        if ($this->request->is('post')) {
            $checklist = $this->Checklists->patchEntity($checklist, $this->request->data);
            if ($this->Checklists->save($checklist)) {
                $this->Flash->success(__('The checklist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The checklist could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('checklist'));
        $this->set('_serialize', ['checklist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Checklist id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $checklist = $this->Checklists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $checklist = $this->Checklists->patchEntity($checklist, $this->request->data);
            if ($this->Checklists->save($checklist)) {
                $this->Flash->success(__('The checklist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The checklist could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('checklist'));
        $this->set('_serialize', ['checklist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Checklist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $checklist = $this->Checklists->get($id);
        if ($this->Checklists->delete($checklist)) {
            $this->Flash->success(__('The checklist has been deleted.'));
        } else {
            $this->Flash->error(__('The checklist could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
