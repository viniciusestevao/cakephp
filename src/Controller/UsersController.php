<?php
namespace App\Controller;

use App\Controller\AppController;
// use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        // $this->set(_serialize('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        // $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O Usuário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Usuário não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O Usuário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Usuário não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O Usuário foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Usuário não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // LOGIN/ACESSAR
    public function login(){
        if($this->request->is('post')){
            $user = $this->Auth->Identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'livros']);
            }
            // exception/catch
            $this->Flash->error('Login incorreto. E-mail ou senha inválido.');
        }
    }

    // LOGOUT/SAIR
    public function logout(){
        $this->Flash->success('Sessão encerrada. Informe seu e-mail e senha para acessar novamente.');
        return $this->redirect($this->Auth->logout());
    }

    // CRIAR CONTA

    public function register(){
        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success('Cadastro feito com sucesso. Você já pode acessar sua conta !');
                return $this->redirect(['action' => 'login']);
            } else {
                $this->Flash->error('Erro ao cadastrar usuário.');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialzie', ['user']);
    }

    // Permitir que convidados acessem essas páginas para se cadastrarem como usuários
    public function beforeFilter(Event $event){
        $this->Auth->allow(['register']);
    }

}
