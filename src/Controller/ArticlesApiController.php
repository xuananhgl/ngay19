<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class ArticlesApiController extends AppController
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
        $articles = $this->Articles->find( 'all', [
                            'order'=> 'rand()',
                            'limit'=>4,
                        ]);
        $this->set([
            'articles' => $articles,
            '_serialize' => ['articles']
        ]);
        
    }

    public function view($id)
    {
        $article = $this->Articles->get($id);
        $this->set([
            'article' => $article,
            '_serialize' => ['article']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $article = $this->Articles->newEntity($this->request->getData());
        if ($this->Articles->save($article)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'article' => $article,
            '_serialize' => ['message', 'article']
        ]);
    }

    public function edit($id)

    {
       
        $this->request->allowMethod(['patch', 'post', 'put']);
        $article = $this->Articles->get($id);
        $article = $this->Articles->patchEntity($article, $this->request->getData());
        if ($this->Articles->save($article)) {
            $message = 'Saved';
            
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message', 'art']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $article = $this->Articles->get($id);
        $message = 'Deleted';
        if (!$this->Articles->delete($article)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
    
    
    


}