<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Participant Controller
 *
 * @property \App\Model\Table\ParticipantTable $Participant
 */
class ParticipantController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $participant = $this->paginate($this->Participant);

        $this->set(compact('participant'));
        $this->set('_serialize', ['participant']);
    }

    /**
     * View method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participant = $this->Participant->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('participant', $participant);
        $this->set('_serialize', ['participant']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participant = $this->Participant->newEntity();
        if ($this->request->is('post')) {
            $participant = $this->Participant->patchEntity($participant, $this->request->getData());
            if ($this->Participant->save($participant)) {
                $this->Flash->success(__('The participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participant could not be saved. Please, try again.'));
        }
        $events = $this->Participant->Events->find('list', ['limit' => 200]);
        $this->set(compact('participant', 'events'));
        $this->set('_serialize', ['participant']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participant = $this->Participant->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participant = $this->Participant->patchEntity($participant, $this->request->getData());
            if ($this->Participant->save($participant)) {
                $this->Flash->success(__('The participant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participant could not be saved. Please, try again.'));
        }
        $events = $this->Participant->Events->find('list', ['limit' => 200]);
        $this->set(compact('participant', 'events'));
        $this->set('_serialize', ['participant']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participant = $this->Participant->get($id);
        if ($this->Participant->delete($participant)) {
            $this->Flash->success(__('The participant has been deleted.'));
        } else {
            $this->Flash->error(__('The participant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
