<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $livro->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Autore'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Edit Livro') ?></legend>
        <?php
            echo $this->Form->control('autor_id', ['options' => $autores]);
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('isbn');
            echo $this->Form->control('generos._ids', ['options' => $generos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
