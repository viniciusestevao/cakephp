<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Autore'), ['action' => 'edit', $autore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Autore'), ['action' => 'delete', $autore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Autores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autores view large-9 medium-8 columns content">
    <h3><?= h($autore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($autore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($autore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($autore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($autore->modified) ?></td>
        </tr>
    </table>
</div>
