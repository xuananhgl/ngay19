<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class InterfacesController extends AppController
        {   public function add(){
            $interface = $this->Interfaces->newEntity($this->request->getData());
            if ($this->request->is('post')) {
            
            $interface->user_id = $this->Auth->user('id');
            
            if ($this->Interfaces->save($interface)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
            }
            $this->set('interface', $interface);
        }
        public function index()
        {
           
            $interfaces =$this->Interfaces->find();
            $this->set(compact('interfaces'));
        }
    public function delete($id)
    {
    $this->request->allowMethod(['post', 'delete']);

    $interface = $this->Interfaces->get($id);
    if ($this->Interfaces->delete($interface)) {
        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
                    }
    }
      public function view($id= null)
        {
        $interface = $this->Interfaces->get($id);
            
        $this->set('interface', $interface);
        }

        public function edit($id = null)
    {
        $interface = $this->Interfaces->get($id, [ ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interface = $this->Interfaces->patchEntity($interface, $this->request->getData());
            // $this->Auth->setUser($user);
            if ($this->Interfaces->save($interface)) {
                $this->Flash->success(__('The interface has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The interface could not be saved. Please, try again.'));
        }
        $this->set(compact('interface'));
    }
public function isAuthorized($user)
{
    $action = $this->request->getParam('action');
    // The add and tags actions are always allowed to logged in users.
    if (in_array($action, ['add', '\edit', 'delete'])) {
        return true;
    }

    // All other actions require a slug.
    $id = $this->request->getParam('pass.0');
    if (!$id) {
        return false;
    }

    // Check that the article belongs to the current user.
    $interface = $this->Pres->get($id)->first();

    return $pre->user_id === $user['id'];
}

    }