<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class postsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Headers');
        $this->loadModel('Pres');
        $this->loadModel('Pouss');
        $this->loadModel('Posts');
        $this->loadModel('Pots');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
     public function index()
    {
        $posts = $this->Posts->find('all');
        $this->set([
            'posts' => $posts,
            '_serialize' => ['posts']
        ]);

    }

    public function view($id)
    {
        $post = $this->Posts->get($id);
        $this->set([
            'post' => $post,
            '_serialize' => ['post']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $post = $this->Posts->newEntity($this->request->getData());
        if ($this->Posts->save($post)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'post' => $post,
            '_serialize' => ['message', 'post']
        ]);
    }

    public function edit($id)

    {

        $this->request->allowMethod(['patch', 'post', 'put']);
        $post = $this->Posts->get($id);
        $post = $this->Posts->patchEntity($post, $this->request->getData());
        if ($this->Posts->save($post)) {
            $message = 'Saved';

        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message', 'posts']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $post = $this->Posts->get($id);
        $message = 'Deleted';
        if (!$this->Posts->delete($post)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }





}
