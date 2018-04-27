<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Locacoes Controller
 *
 * @property \App\Model\Table\LocacoesTable $Locacoes
 *
 * @method \App\Model\Entity\Locaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Livros', 'Users']
        ];
        $locacoes = $this->paginate($this->Locacoes);

        $this->set(compact('locacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $locaco = $this->Locacoes->get($id, [
            'contain' => ['Livros', 'Users']
        ]);

        $this->set('locaco', $locaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $locaco = $this->Locacoes->newEntity();
        if ($this->request->is('post')) {
            $locaco = $this->Locacoes->patchEntity($locaco, $this->request->getData());
            if ($this->Locacoes->save($locaco)) {
                $this->Flash->success(__('The locaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locaco could not be saved. Please, try again.'));
        }
        $livros = $this->Locacoes->Livros->find('list', ['limit' => 200]);
        $users = $this->Locacoes->Users->find('list', ['limit' => 200]);
        $this->set(compact('locaco', 'livros', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $locaco = $this->Locacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $locaco = $this->Locacoes->patchEntity($locaco, $this->request->getData());
            if ($this->Locacoes->save($locaco)) {
                $this->Flash->success(__('The locaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The locaco could not be saved. Please, try again.'));
        }
        $livros = $this->Locacoes->Livros->find('list', ['limit' => 200]);
        $users = $this->Locacoes->Users->find('list', ['limit' => 200]);
        $this->set(compact('locaco', 'livros', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Locaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $locaco = $this->Locacoes->get($id);
        if ($this->Locacoes->delete($locaco)) {
            $this->Flash->success(__('The locaco has been deleted.'));
        } else {
            $this->Flash->error(__('The locaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
