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
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="generos form large-9 medium-8 columns content">
    <?= $this->Form->create($genero) ?>
    <fieldset>
        <table class="vertical-table">
            <tr>
                <th scope="row">
                    <li><?= $this->Form->postLink(__('Excluir'),['action' => 'delete', $genero->id],['confirm' => __('Você tem certeza que deseja excluir o gênero {0} - {1}?', $genero->id, $genero->descricao)])?></li>
                </th>
            </tr>
        </table>        
        <legend><?= __('Editar Gênero Literário') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('livros._ids', ['options' => $livros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
