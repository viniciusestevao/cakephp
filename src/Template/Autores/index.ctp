<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore[]|\Cake\Collection\CollectionInterface $autores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Autore'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autores index large-9 medium-8 columns content">
    <h3><?= __('Autores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $autore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autore->id)]) ?>
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
