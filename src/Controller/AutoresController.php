<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autores Controller
 *
 * @property \App\Model\Table\AutoresTable $Autores
 *
 * @method \App\Model\Entity\Autore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
      //  $this->paginate = [ 'contain' => ['Livros'] ];  // I added this line trying to show up the books of each author
        $autores = $this->paginate($this->Autores);

        $this->set(compact('autores'));
    }

    /**
     * View method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autore = $this->Autores->get($id, [ 'contain' => ['Livros'] ]); // before it was not written 'Livros' inside the brackets

        $this->set('autore', $autore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autore = $this->Autores->newEntity();
        if ($this->request->is('post')) {
            $autore = $this->Autores->patchEntity($autore, $this->request->getData());
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('O Autor foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Autor não pôde ser salvo. Por favor, tente novamente.'));
        }
       // $livros = $this->Autores->Livros->find('list', ['limit' => 200]);
        $this->set(compact('autore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autore = $this->Autores->patchEntity($autore, $this->request->getData());
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('O autor foi salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Autor não pôde ser salvo. Por favor, tente novamente.'));
        }
        $this->set(compact('autore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autore = $this->Autores->get($id);
        if ($this->Autores->delete($autore)) {
            $this->Flash->success(__('O Autor foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('O Autor não pôde ser excluído. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
