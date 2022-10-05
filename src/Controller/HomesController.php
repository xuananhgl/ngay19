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
          $this->loadModel('Posts');
        $this->loadModel('Headers');
        $this->loadModel('Pres');
        $this->loadModel('Pouss');
        $this->loadModel('Articles');

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    public function home(){

                      $this->loadModel('Headers');

                          $headers= $this->Headers->find(
                              'all', [
                                  'order'=> 'rand()',
                                  'limit'=>1,
                              ]
                               );
                                $this->set(compact('headers'));

                          foreach ($headers as $header)
                            // var_dump();

                                                  // exit;
                                // ==================================================================


                          $this->loadModel('Pres');
                          $query = $this->Pres->find(
                              'all', ['limit'=>3]);
                          $query->enableHydration(false);
                          $pres = $query->toList();
                          // debug($pre[0]['id']);
                          $this->set(compact('pres'));

                          // =============================================================================
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
                                // ============================================
                                  $pre = $this->Pres->get($pres[0]['id']);
                                    $pre1 = $this->Pres->get($pres[1]['id']);
                                      $pre2 = $this->Pres->get($pres[2]['id']);

                                  $header = $this->Headers->get($header['id_headers']);
                               if ($this->request->is(['post', 'put'])) {
                                   // Prior to 3.4.0 $this->request->data() was used.
                                     $this->Pres->patchEntity($pre, $this->request->getData());
                                     $this->Pres->patchEntity($pre1, $this->request->getData());
                                     $this->Pres->patchEntity($pre2, $this->request->getData());
                                     $this->Headers->patchEntity($header, $this->request->getData());
                                     debug($pre);
                                     debug($pre1);
                                     debug($pre);
                                     exit;
                                   if ($this->Pres->save($pre) && $this->Pres->save($pre1) && $this->Pres->save($pre2) && $this->Headers->save($header)) {
                                       $this->Flash->success(__('Your header has been updated.'));
                                       return $this->redirect(['action' => 'home']);
                                   }
                                   $this->Flash->error(__('Unable to update your header.'));
                               }

                              $this->set('header', $header);
                              $this->set('pre', $pre);
                              $this->set('pre1', $pre1);
                              $this->set('pre2', $pre2);

    }
     public function index()
    {
      $posts = $this->Posts->find('all');
      $this->set(['posts' => $posts]);
      $query = $this->Articles->find(
          'all', [

              'limit'=>4
          ]
      );
      $query->enableHydration(false);
      $article = $query->toList();

          $this->set(compact('article'));

        $pres = $this->Pres->find( 'all', [
                            'order'=> 'rand()',
                            'limit'=>3,
                        ]);
        $this->set([
            'pres' => $pres,
            '_serialize' => ['pres']
        ]);

    }

    public function view($id)
    {
        $pre = $this->Pres->get($id);
        $this->set([
            'pre' => $pre,
            '_serialize' => ['pre']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $pre = $this->Pres->newEntity($this->request->getData());
        if ($this->Pres->save($pre)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'pre' => $pre,
            '_serialize' => ['message', 'pre']
        ]);
    }

    public function edit($id)

    {

        $this->request->allowMethod(['patch', 'post', 'put']);
        $pre = $this->Pres->get($id);
        $pre = $this->Pres->patchEntity($pre, $this->request->getData());
        if ($this->Pres->save($pre)) {
            $message = 'Saved';

        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message', 'pres']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $pre = $this->Pres->get($id);
        $message = 'Deleted';
        if (!$this->Pres->delete($pre)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }





}
