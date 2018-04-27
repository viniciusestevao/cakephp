<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>   
        <li><?= $this->Html->link(__('Livros'), ['action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="livros form large-10 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <table class="vertical-table">
            <tr>
                <th scope="row">
                    <li><?= $this->Form->postLink(__('Excluir'),['action' => 'delete', $livro->id],['confirm' => __('Você tem certeza que deseja excluir o livro {0} - {1}?', $livro->id, $livro->titulo)])?></li>
                </th>
            </tr>  
        </table>                    
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
