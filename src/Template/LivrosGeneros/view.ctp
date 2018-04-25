<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LivrosGenero $livrosGenero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livros Genero'), ['action' => 'edit', $livrosGenero->livro_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livros Genero'), ['action' => 'delete', $livrosGenero->livro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $livrosGenero->livro_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livros Generos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livros Genero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livrosGeneros view large-9 medium-8 columns content">
    <h3><?= h($livrosGenero->livro_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $livrosGenero->has('livro') ? $this->Html->link($livrosGenero->livro->id, ['controller' => 'Livros', 'action' => 'view', $livrosGenero->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= $livrosGenero->has('genero') ? $this->Html->link($livrosGenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $livrosGenero->genero->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($livrosGenero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($livrosGenero->modified) ?></td>
        </tr>
    </table>
</div>
