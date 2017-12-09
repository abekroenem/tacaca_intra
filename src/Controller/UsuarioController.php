<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 *
 * @method \App\Model\Entity\Usuario[] paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController
{

    public function login() {
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Usuário ou senha inválido(a)'));
            }
        }
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
}
