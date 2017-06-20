<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * About Controller
 *
 *
 */
class SponsorController extends AppController
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

        $this->set(compact('Sponsor'));
        $this->set('_serialize', ['Sponsor']);
    }


}