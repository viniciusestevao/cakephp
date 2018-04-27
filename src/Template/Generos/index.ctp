<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero[]|\Cake\Collection\CollectionInterface $generos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="generos index large-10 medium-8 columns content">
    <h3><?= __('Gêneros Literários') ?></h3>
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
                <th scope="col" width="30%"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generos as $genero): ?>
            <tr>
                <td><?= $this->Number->format($genero->id) ?></td>
                <td><?= h($genero->descricao) ?></td>
                <td><?= h($genero->created) ?></td>
                <td><?= h($genero->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $genero->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $genero->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $genero->id], ['confirm' => __('Você tem certeza que deseja excluir o gênero {0} - {1}?', $genero->id, $genero->descricao)]) ?>
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
