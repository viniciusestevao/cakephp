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
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>   
    </ul>
</nav>
<div class="autores form large-9 medium-8 columns content">
    <?= $this->Form->create($autore) ?>
        <table class="vertical-table">
            <tr>
                <th scope="row">
                    <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $autore->id], ['confirm' => __('Você tem certeza que deseja excluir autor {0} - {1}?', $autore->id, $autore->nome)]) ?> </li>
                </th>
            </tr>
        </table>
    <fieldset>
        <legend><?= __('Editar Autor') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
