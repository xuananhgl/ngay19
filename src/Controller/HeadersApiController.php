<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HeadersApiController extends AppController
{  

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Headers');
        $this->loadModel('Pres');
        $this->loadModel('Pouss');
        $this->loadModel('Articles');

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
     public function index()
    {
        $headers = $this->Headers->find( 'all', [
                            'order'=> 'rand()',
                            'limit'=>3,
                        ]);
        $this->set([
            'headers' => $headers,
            '_serialize' => ['headers']
        ]);
        
    }

    public function view($id)
    {
        $header = $this->Headers->get($id);
        $this->set([
            'header' => $header,
            '_serialize' => ['header']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $header = $this->Headers->newEntity($this->request->getData());
        if ($this->Headers->save($header)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'header' => $header,
            '_serialize' => ['message', 'header']
        ]);
    }

    public function edit($id)

    {
       
        $this->request->allowMethod(['patch', 'post', 'put']);
        $header = $this->Headers->get($id);
        $header = $this->Headers->patchEntity($header, $this->request->getData());
        if ($this->Headers->save($header)) {
            $message = 'Saved';
            
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message', 'headers']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $header = $this->Headers->get($id);
        $message = 'Deleted';
        if (!$this->Headers->delete($header)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
    
    
    


}