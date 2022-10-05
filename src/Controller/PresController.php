<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class PresController extends AppController
  {
    public function add(){
            $pre = $this->Pres->newEntity($this->request->getData());
            if ($this->request->is('post')) {
            $translations = [

                            // TIENG ANH
                'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                'en_US' => ['author' => $this->request->getData('_translations.en_US.author')],
                'en_US' => ['dress' => $this->request->getData('_translations.en_US.dress')],

                            // TAY BAN NHA
                'es' => ['about' => $this->request->getData('_translations.es.about')],
                'es' => ['author' => $this->request->getData('_translations.es.author')],
                'es' => ['dress' => $this->request->getData('_translations.es.dress')],

                            // TIENGVIET
                'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')],
                'vi_VN' => ['author' => $this->request->getData('_translations.vi_VN.author')],
                'vi_VN' => ['dress' => $this->request->getData('_translations.vi_VN.dress')]
            ];


            foreach ($translations as $lang => $data) {
                $pre->translation($lang)->set($data, ['guard' => false]);
            }


            if ($this->Pres->save($pre)) {
                $this->Flash->success(__('Your pre has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your pre.'));
            }
            $this->set('pre', $pre);
        }
    public function index()
        {
            $this->loadComponent('Paginator');
            $pres = $this->Paginator->paginate($this->Pres->find());
            $this->set(compact('pres'));
        }
    public function delete($id)
        {
            $this->request->allowMethod(['post', 'delete']);
            $pre = $this->Pres->get($id);
            if ($this->Pres->delete($pre)) {
            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
                                    }
        }
    public function view($id= null)
        {
            $pre = $this->Pres->get($id);

            $this->set('pre', $pre);
        }

    public function edit($id = null)
        {
            $pre = $this->Pres->get($id);
            if ($this->request->is(['post', 'put'])) {
              $this->Pres->patchEntity($pre, $this->request->getData());
              if ($this->Pres->save($pre)) {
              $this->Flash->success(__('Your pre has been updated.'));
              return $this->redirect(['action' => 'index']);
              }
              $this->Flash->error(__('Unable to update your pre.'));
              }
            $this->set('pre', $pre);
        }
  }
