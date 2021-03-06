<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore[]|\Cake\Collection\CollectionInterface $autores
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>    
    </ul>
</nav>
<div class="autores index large-10 medium-8 columns content">
    <h3><?= __('Autores') ?></h3>
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
                <th scope="col" width="10%"><?= $this->Paginator->sort('id') ?></th> 
                <th scope="col" width="30%"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($autores as $autore): ?>
            <tr>
                <td><?= $this->Number->format($autore->id) ?></td>
                <td><?= h($autore->nome) ?></td>
                <td><?= h($autore->created) ?></td>
                <td><?= h($autore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $autore->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $autore->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $autore->id], ['confirm' => __('Você tem certeza que deseja excluir autor {0} - {1}?', $autore->id, $autore->nome)]) ?>
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
