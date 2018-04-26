<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Autores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['action' => 'add']) ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Gênero Literário'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Consultar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autores form large-9 medium-8 columns content">
    <?= $this->Form->create($autore) ?>
    <fieldset>
        <legend><?= __('Novo Autor') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
