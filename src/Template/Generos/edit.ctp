<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $genero->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $genero->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generos form large-9 medium-8 columns content">
    <?= $this->Form->create($genero) ?>
    <fieldset>
        <legend><?= __('Edit Genero') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('livros._ids', ['options' => $livros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
