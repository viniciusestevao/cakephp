<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>        
        <li><?= $this->Html->link(__('Livros'), ['action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="livros index large-10 medium-8 columns content">
    <h3><?= __('Livros') ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">
                <li><?= $this->Html->link(__('Novo'), ['action' => 'add']) ?></li>
            </th>
        </tr>  
    </table> 
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" width="4%"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" width="4%"><?= $this->Paginator->sort('autor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col" width="16%"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" width="9%"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col" width="9%"><?= $this->Paginator->sort('Locados') ?></th>
                <th scope="col" width="12%"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $this->Number->format($livro->id) ?></td>
                <td><?= $livro->has('autore') ? $this->Html->link($livro->autore->id, ['controller' => 'Autores', 'action' => 'view', $livro->autore->id]) : '' ?></td>
                <td><?= h($livro->titulo) ?></td>
                <td><?= h($livro->descricao) ?></td>
                <td><?= $this->Number->format($livro->quantidade) ?></td>
                <td><?= $this->Number->format($livro->qtde_locados) ?></td>
                <td><?= $this->Number->format($livro->isbn) ?></td>
                <td><?= h($livro->created) ?></td>
                <td><?= h($livro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $livro->id], ['confirm' => __('Você tem certeza que deseja excluir o livro {0} - {1}?', $livro->id, $livro->titulo)]) ?>
                    <?= $this->Html->link(__('Locar'), ['action' => 'locar', $livro->id]) ?>
                    <?= $this->Html->link(__('Devolver'), ['action' => 'devolver', $livro->id]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de um total de {{count}}')]) ?></p>
    </div>
</div>
