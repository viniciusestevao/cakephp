<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livro'), ['action' => 'edit', $livro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livros view large-9 medium-8 columns content">
    <h3><?= h($livro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Autore') ?></th>
            <td><?= $livro->has('autore') ? $this->Html->link($livro->autore->id, ['controller' => 'Autores', 'action' => 'view', $livro->autore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($livro->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($livro->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($livro->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= $this->Number->format($livro->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($livro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($livro->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Generos') ?></h4>
        <?php if (!empty($livro->generos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($livro->generos as $generos): ?>
            <tr>
                <td><?= h($generos->id) ?></td>
                <td><?= h($generos->descricao) ?></td>
                <td><?= h($generos->created) ?></td>
                <td><?= h($generos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Generos', 'action' => 'view', $generos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Generos', 'action' => 'edit', $generos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Generos', 'action' => 'delete', $generos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
