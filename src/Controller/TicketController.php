<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * About Controller
 *
 *
 */
class TicketController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->modelClass = false;
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        //$About = $this->paginate($this->About);

        $this->set(compact('Ticket'));
        $this->set('_serialize', ['Ticket']);
    }


}