<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locaco[]|\Cake\Collection\CollectionInterface $locacoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="locacoes index large-9 medium-8 columns content">
    <h3><?= __('Locações') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_locacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_vencimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_devolucao') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locacoes as $locaco): ?>
            <tr>
                <td><?= $this->Number->format($locaco->id) ?></td>
                <td><?= $locaco->has('livro') ? $this->Html->link($locaco->livro->titulo, ['controller' => 'Livros', 'action' => 'view', $locaco->livro->id]) : '' ?></td>
                <td><?= $locaco->has('user') ? $this->Html->link($locaco->user->id, ['controller' => 'Users', 'action' => 'view', $locaco->user->id]) : '' ?></td>
                <td><?= h($locaco->data_locacao) ?></td>
                <td><?= h($locaco->data_vencimento) ?></td>
                <td><?= h($locaco->data_devolucao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $locaco->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $locaco->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $locaco->id], ['confirm' => __('Você tem certeza que deseja excluir a locação {0}?', $locaco->id)]) ?>
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
