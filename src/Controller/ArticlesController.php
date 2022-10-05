<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;



/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $articles = $this->paginate($this->Articles);
        $this->set(compact('articles'));

    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    // }
    public function view($id = null)
    {
            $article = $this->Articles->get($id);
            $this->set(compact('article'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
     public function add(){
             $article = $this->Articles->newEntity($this->request->getData());
             if ($this->request->is('post')) {
             $translations = [

                             // TIENG ANH
                 'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                 'en_US' => ['body' => $this->request->getData('_translations.en_US.body')],
                 'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],

                             // TAY BAN NHA
                 'es' => ['about' => $this->request->getData('_translations.es.about')],
                 'es' => ['body' => $this->request->getData('_translations.es.body')],
                 'es' => ['title' => $this->request->getData('_translations.es.title')],

                             // TIENGVIET
                 'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')],
                 'vi_VN' => ['body' => $this->request->getData('_translations.vi_VN.body')],
                 'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')]
             ];


             foreach ($translations as $lang => $data) {
                 $article->translation($lang)->set($data, ['guard' => false]);
             }


             if ($this->Articles->save($article)) {
                 $this->Flash->success(__('Your article has been saved.'));
                 return $this->redirect(['action' => 'index']);
             }
             $this->Flash->error(__('Unable to add your article.'));
             }
             $this->set('article', $article);
         }
    //

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $article = $this->Articles->get($id, [ ]);
        // debug($article->id);
        // debug('<a href=htts://localhost:123/articlwes/'.$article->id.'/?locale=vi_VN> jihkhjjk </a>');
        // exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
    }



    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */




    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $article = $this->Articles->get($id);

    if ($this->Articles->delete($article)) {
        $this->Flash->success(__('The {0} article has been deleted.', $article->$id));
        return $this->redirect(['action' => 'index']);
    }
}

}
