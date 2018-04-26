<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Generos Controller
 *
 * @property \App\Model\Table\GenerosTable $Generos
 *
 * @method \App\Model\Entity\Genero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $generos = $this->paginate($this->Generos);

        $this->set(compact('generos'));
    }

    /**
     * View method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genero = $this->Generos->get($id, [
            'contain' => ['Livros']
        ]);

        $this->set('genero', $genero);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genero = $this->Generos->newEntity();
        if ($this->request->is('post')) {
            $genero = $this->Generos->patchEntity($genero, $this->request->getData());
            if ($this->Generos->save($genero)) {
                $this->Flash->success(__('O Gênero Literário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Gênero Literário não pôde ser salvo. Por favor, tente novamente.'));
        }
        $livros = $this->Generos->Livros->find('list', ['limit' => 200]);
        $this->set(compact('genero', 'livros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genero = $this->Generos->get($id, [
            'contain' => ['Livros']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genero = $this->Generos->patchEntity($genero, $this->request->getData());
            if ($this->Generos->save($genero)) {
                $this->Flash->success(__('O Gênero Literário foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Gênero Literário não pôde ser salvo. Por favor, tente novamente.'));
        }
        $livros = $this->Generos->Livros->find('list', ['limit' => 200]);
        $this->set(compact('genero', 'livros'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genero = $this->Generos->get($id);
        if ($this->Generos->delete($genero)) {
            $this->Flash->success(__('O Gênero Literário foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Gênero Literário não pôde ser excluído. Por favor, tente novamente..'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
