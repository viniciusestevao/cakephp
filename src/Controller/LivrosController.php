<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Livros Controller
 *
 * @property \App\Model\Table\LivrosTable $Livros
 *
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [ 'contain' => ['Autores'] ];
        $livros = $this->paginate($this->Livros);

        $this->set(compact('livros'));
    }

    /**
     * View method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livro = $this->Livros->get($id, ['contain' => ['Autores', 'Generos']]);

        $this->set('livro', $livro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livro = $this->Livros->newEntity();
        if ($this->request->is('post')) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('O Livro foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Livro não pôde ser salvo. Por favor, tente novamente.'));
        }
        $autores = $this->Livros->Autores->find('list', ['limit' => 200]);
        $generos = $this->Livros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'autores', 'generos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livro = $this->Livros->get($id, [
            'contain' => ['Generos']
        ]);
        // $livro->modified=DboSource::expression('NOW()');
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('O Livro foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Livro não pôde ser salvo. Por favor, tente novamente.'));
        }
        $autores = $this->Livros->Autores->find('list', ['limit' => 200]);
        $generos = $this->Livros->Generos->find('list', ['limit' => 200]);
        $this->set(compact('livro', 'autores', 'generos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Livro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livro = $this->Livros->get($id);
        if ($this->Livros->delete($livro)) {
            $this->Flash->success(__('O Livro foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Livro não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function locar($id = null)
    {
        $livro = $this->Livros->get($id);
        if ($livro->quantidade==$livro->qtde_locados) {
            $this->Flash->success(__('{0} não está disponível no momento. Todas as {1} unidades foram locadas e ainda não foram devolvidas.', $livro->titulo, $livro->quantidade));
            return $this->redirect(['action' => 'index']);       
        }else{
            $livro->qtde_locados = $livro->qtde_locados + 1;    
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('O livro foi locado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O livro não pôde ser locado. Por favor, tente novamente.'));
        }
    }

    public function devolver($id = null)
    {
        $livro = $this->Livros->get($id);
        if ($livro->qtde_locados==0) {
            $this->Flash->success(__('Não há livros locados para serem devolvidos.'));
            return $this->redirect(['action' => 'index']);       
        }else{
            $livro->qtde_locados = $livro->qtde_locados - 1;    
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('O livro foi devolvido com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O livro não pôde ser devolvido. Por favor, tente novamente.'));
        }
    }

}
