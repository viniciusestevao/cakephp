<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LivrosGenero[]|\Cake\Collection\CollectionInterface $livrosGeneros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Livros Genero'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livrosGeneros index large-9 medium-8 columns content">
    <h3><?= __('Livros Generos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genero_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livrosGeneros as $livrosGenero): ?>
            <tr>
                <td><?= $livrosGenero->has('livro') ? $this->Html->link($livrosGenero->livro->id, ['controller' => 'Livros', 'action' => 'view', $livrosGenero->livro->id]) : '' ?></td>
                <td><?= $livrosGenero->has('genero') ? $this->Html->link($livrosGenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $livrosGenero->genero->id]) : '' ?></td>
                <td><?= h($livrosGenero->created) ?></td>
                <td><?= h($livrosGenero->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livrosGenero->livro_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livrosGenero->livro_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livrosGenero->livro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $livrosGenero->livro_id)]) ?>
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
