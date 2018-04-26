<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LivrosGeneros Controller
 *
 * @property \App\Model\Table\LivrosGenerosTable $LivrosGeneros
 *
 * @method \App\Model\Entity\LivrosGenero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivrosGenerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['contain' => ['Livros', 'Generos']];
        $livrosGeneros = $this->paginate($this->LivrosGeneros);

        $this->set(compact('livrosGeneros'));
    }

    /**
     * View method
     *
     * @param string|null $id Livros Genero id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livrosGenero = $this->LivrosGeneros->get($id, ['contain' => ['Livros', 'Generos']]);

        $this->set('livrosGenero', $livrosGenero);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livrosGenero = $this->LivrosGeneros->newEntity();
        if ($this->request->is('post')) {
            $livrosGenero = $this->LivrosGeneros->patchEntity($livrosGenero, $this->request->getData());
            if ($this->LivrosGeneros->save($livrosGenero)) {
                $this->Flash->success(__('O conjunto Livro-Gênero foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O conjunto Livro-Gênero não pôde ser salvo. Por favor, tente novamente.'));
        }
        $livros = $this->LivrosGeneros->Livros->find('list', ['limit' => 200]);
        $generos = $this->LivrosGeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livrosGenero', 'livros', 'generos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Livros Genero id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livrosGenero = $this->LivrosGeneros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livrosGenero = $this->LivrosGeneros->patchEntity($livrosGenero, $this->request->getData());
            if ($this->LivrosGeneros->save($livrosGenero)) {
                $this->Flash->success(__('O conjunto Livro-Gênero foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O conjunto Livro-Gênero não pôde ser salvo. Por favor, tente novamente.'));
        }
        $livros = $this->LivrosGeneros->Livros->find('list', ['limit' => 200]);
        $generos = $this->LivrosGeneros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livrosGenero', 'livros', 'generos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Livros Genero id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livrosGenero = $this->LivrosGeneros->get($id);
        if ($this->LivrosGeneros->delete($livrosGenero)) {
            $this->Flash->success(__('O conjunto Livro-Gênero foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O conjunto Livro-Gênero não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
