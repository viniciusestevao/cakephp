<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Gêneros Literários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Gênero Literário'), ['action' => 'add']) ?></li>
        <li><?= $this->Form->postLink(__('Excluir Gênero Literário'),['action' => 'delete', $genero->id],['confirm' => __('Você tem certeza que deseja excluir o gênero {0} - {1}?', $genero->id, $genero->descricao)])?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generos form large-9 medium-8 columns content">
    <?= $this->Form->create($genero) ?>
    <fieldset>
        <legend><?= __('Editar Gênero Literário') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('livros._ids', ['options' => $livros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
