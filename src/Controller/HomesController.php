<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HomesController extends AppController
{  

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    
    
    public function add()
        {
                $home = $this->Homes->newEntity($this->request->getData());
                if ($this->request->is('post')) 
                { $home = $this->Homes->patchEntity($home, $this->request->getData());
                    $translations = [
                        'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                        'es' => ['about' => $this->request->getData('_translations.es.about')], 
                        'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')], 

                        'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],
                        'es' => ['title' => $this->request->getData('_translations.es.title')], 
                        'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')]
                    ];
                    
                    
                    foreach ($translations as $lang => $data) {
                        $home->translation($lang)->set($data, ['guard' => false]);
                    }

              
                
                
                if ($this->Homes->save($home)) {
                    $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your article.'));
                }
                //  $home = $this->Homes->find('translations')->first();
                $this->set('home', $home);


               
               
        }

    
      
    public function index()
        {          
          
            

           



              
                    
                
                
                    
                    // luu locate vao session/config/db
                    //reload
                    
                $this->loadModel('Headers');
       
                    $homes= $this->Homes->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                         );
                    
                    $this->set(compact('homes'));
              
         
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
           $this->loadModel('Headers'); 
          
             $header = $this->Headers->get($id);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $header = $this->Headers->patchEntity($header, $this->request->getData());

               
                if ($this->Headers->save($header)) {
                    $this->Flash->success(__('The user has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('header'));
            //  $this->loadModel('Articles'); 
            // $article = $this->Articles->get($id, [ ]);
            // // debug($article->id);
            // // debug('<a href=htts://localhost:123/articlwes/'.$article->id.'/?locale=vi_VN> jihkhjjk </a>');
            // // exit;
            // if ($this->request->is(['patch', 'post', 'put'])) {
            //     $article = $this->Articles->patchEntity($article, $this->request->getData());
           
            //     if ($this->Articles->save($article)) {
            //         $this->Flash->success(__('The article has been saved.'));
    
            //         return $this->redirect(['action' => 'index']);
            //     }
            //     $this->Flash->error(__('The article could not be saved. Please, try again.'));
            // }
            // $this->set(compact('article'));
          
    
        // debug($article->id);
        // debug('<a href=htts://localhost:123/articlwes/'.$article->id.'/?locale=vi_VN> jihkhjjk </a>');
        // exit;
      
       
           
        
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