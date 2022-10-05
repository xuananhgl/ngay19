<?php
// src/Controller/PoursController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class PoursController extends AppController
{
public function initialize()
{
    parent::initialize();

    $this->loadComponent('Flash'); // Include the FlashComponent
}


  public function add(){
            $pour = $this->Pours->newEntity($this->request->getData());
            if ($this->request->is('post'))
            {
                $translations = [
                    'en_US' => ['logo' => $this->request->getData('_translations.en_US.logo')],
                    'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],
                    'en_US' => ['Notre_engagement' => $this->request->getData('_translations.en_US.Notre_engagement')],
                    'en_US' => ['about_notre' => $this->request->getData('_translations.en_US.about_notre')],
                    'en_US' => ['note' => $this->request->getData('_translations.en_US.note')],


                    'es' => ['logo' => $this->request->getData('_translations.es.logo')],
                    'es' => ['title' => $this->request->getData('_translations.es.title')],
                    'es' => ['Notre_engagement' => $this->request->getData('_translations.es.Notre_engagement')],
                    'es' => ['about_notre' => $this->request->getData('_translations.es.about_notre')],
                    'es' => ['note' => $this->request->getData('_translations.es.note')],

                    'vi_VN' => ['logo' => $this->request->getData('_translations.vi_VN.logo')],
                    'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')],
                    'vi_VN' => ['Notre_engagement' => $this->request->getData('_translations.vi_VN.Notre_engagement')],
                    'vi_VN' => ['about_notre' => $this->request->getData('_translations.vi_VN.about_notre')],
                    'vi_VN' => ['note' => $this->request->getData('_translations.vi_VN.note')]
                ];


                foreach ($translations as $lang => $data) {
                    $pour->translation($lang)->set($data, ['guard' => false]);
                }



                if ($this->Pours->save($pour)) {
                    $this->Flash->success(__('Your pour has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your pour.'));
                }
                $this->set('pour', $pour);

  }



public function index()
    {

                $this->loadModel('Pours');
                $pours= $this->Pours->find(
                    'all', [
                        'order'=> 'rand()',
                        'limit'=>1,
                    ]
                );
                $this->set(compact('pours'));


}

public function view($id= null)
    {
                $pour = $this->Pours->get($id);

                    $this->set('pour', $pour);
    }



    public function edit($id = null)
    {
        $pour = $this->pours->get($id);
        if ($this->request->is(['post', 'put'])) {
            // Prior to 3.4.0 $this->request->data() was used.
            $this->pours->patchEntity($pour, $this->request->getData());
            if ($this->pours->save($pour)) {
                $this->Flash->success(__('Your pour has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your pour.'));
        }

        $this->set('pour', $pour);
    }


public function delete($id)
            {
                    $this->request->allowMethod(['post', 'delete']);
                         $pour = $this->Pours->get($id);
                    if ($this->Pours->delete($pour)) {
                        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
                        return $this->redirect(['action' => 'index']);
                    }
            }


    }
