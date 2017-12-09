<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Post Controller
 *
 * @property \App\Model\Table\PostTable $Post
 *
 * @method \App\Model\Entity\Post[] paginate($object = null, array $settings = [])
 */
class PostController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuario'],
            'order' => ['post.created'=>'desc']
        ];
        $post = $this->paginate($this->Post);

        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Post->get($id, [
            'contain' => ['Usuario']
        ]);

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Post->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Post->patchEntity($post, $this->request->getData());
            if ($this->Post->save($post)) {
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $usuario = $this->Post->Usuario->find('list', ['limit' => 200]);
        $this->set(compact('post', 'usuario'));
        $this->set('_serialize', ['post']);
    }

    public function beforeFilter(Event $event) {

        $this->Auth->allow('index');
        $this->Auth->allow('view');
    }
}
