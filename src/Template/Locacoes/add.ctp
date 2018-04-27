<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Locaco $locaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="locacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($locaco) ?>
    <fieldset>
        <legend><?= __('Nova Locação') ?></legend>
        <?php
            echo $this->Form->control('livro_id', ['options' => $livros]);
            echo $this->Form->control('usuario_id', ['options' => $users]);
            echo $this->Form->control('data_locacao');
            echo $this->Form->control('data_vencimento');
            echo $this->Form->control('data_devolucao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
