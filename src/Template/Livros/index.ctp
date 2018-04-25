<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros index large-9 medium-8 columns content">
    <h3><?= __('Livros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                <td><?= $this->Number->format($livro->isbn) ?></td>
                <td><?= h($livro->created) ?></td>
                <td><?= h($livro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
