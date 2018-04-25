<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Genero'), ['action' => 'edit', $genero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Genero'), ['action' => 'delete', $genero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generos view large-9 medium-8 columns content">
    <h3><?= h($genero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($genero->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($genero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($genero->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Livros') ?></h4>
        <?php if (!empty($genero->livros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Autor Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Isbn') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($genero->livros as $livros): ?>
            <tr>
                <td><?= h($livros->id) ?></td>
                <td><?= h($livros->autor_id) ?></td>
                <td><?= h($livros->titulo) ?></td>
                <td><?= h($livros->descricao) ?></td>
                <td><?= h($livros->quantidade) ?></td>
                <td><?= h($livros->isbn) ?></td>
                <td><?= h($livros->created) ?></td>
                <td><?= h($livros->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Livros', 'action' => 'view', $livros->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Livros', 'action' => 'edit', $livros->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livros', 'action' => 'delete', $livros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livros->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
