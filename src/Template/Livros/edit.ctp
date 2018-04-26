<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>   
        <li><?= $this->Html->link(__('Consultar Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Você tem certeza que deseja excluir o livro {0} - {1}?', $livro->id, $livro->titulo)]) ?> </li>
        <li><br></li>   
        <li><?= $this->Html->link(__('Consultar Autores'), ['controller' => 'Autores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'Autores', 'action' => 'add']) ?> </li>
        <li><br></li>   
        <li><?= $this->Html->link(__('Consultar Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Gênero Literário'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Editar Livro') ?></legend>
        <?php
            echo $this->Form->control('autor_id', ['options' => $autores]);
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('isbn');
            echo $this->Form->control('generos._ids', ['options' => $generos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
