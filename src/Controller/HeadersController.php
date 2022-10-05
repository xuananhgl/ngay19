<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HeadersController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }


    public function add()
        {
                $header = $this->Headers->newEntity($this->request->getData());
                if ($this->request->is('post'))
                { $header = $this->Headers->patchEntity($header, $this->request->getData());
                    $translations = [
                        'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                        'es' => ['about' => $this->request->getData('_translations.es.about')],
                        'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')],

                        'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],
                        'es' => ['title' => $this->request->getData('_translations.es.title')],
                        'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')]
                    ];


                    foreach ($translations as $lang => $data) {
                        $header->translation($lang)->set($data, ['guard' => false]);
                    }


                if ($this->Headers->save($header)) {
                    $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your article.'));
                }
                //  $header = $this->Headers->find('translations')->first();
                $this->set('header', $header);




        }



    public function index()
        {


                $this->loadModel('Headers');

                    $headers= $this->Headers->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                         );

                    $this->set(compact('headers'));


                    $this->loadModel('Pres');
                    $query = $this->Pres->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>3,
                        ]
                    );
                    $query->enableHydration(false);
                    $pre = $query->toList();
                    $this->set(compact('pre'));


                    $this->loadModel('Pours');
                    $pours= $this->Pours->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                    );
                    $this->set(compact('pours'));


                    $this->loadModel('Articles');
                    $query = $this->Articles->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>4,
                        ]
                    );
                    $query->enableHydration(false); // Results as arrays instead of entities
                    $article = $query->toList(); // Execute the query and return the array

                        $this->set(compact('article'));

                        $this->loadModel('Interfaces');
                        $interfaces= $this->Interfaces->find(
                             'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                        );
                        $this->set(compact('interfaces'));
    }
    public function list()

        {
                    $this->loadComponent('Paginator');
                    $headers = $this->Paginator->paginate($this->Headers->find());
                    $this->set(compact('headers'));
        }
    public function view($id= null)
        {
                    $header = $this->Headers->get($id);

                        $this->set('header', $header);
        }
    public function edit($id = null)
        {
            $header = $this->Headers->get($id);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $header = $this->Headers->patchEntity($header, $this->request->getData());

                if ($this->Headers->save($header)){
                    $this->Flash->success(__('The headers has been saved.'));
                    return $this->redirect(['action' => 'index']);
               }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
         }
         $this->set(compact('header'));

    }


    public function delete($id)
                {
                        $this->request->allowMethod(['post', 'delete']);
                             $header = $this->Headers->get($id);
                        if ($this->Headers->delete($header)) {
                            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
                            return $this->redirect(['action' => 'index']);
                        }
                }

}
