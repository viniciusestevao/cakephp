<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><br></li>
        <li><?= $this->Html->link(__('Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>         
        <li><?= $this->Html->link(__('Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Gêneros Literários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="generos view large-10 medium-8 columns content">
    <h3><?= h($genero->descricao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">
                <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $genero->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $genero->id], ['confirm' => __('Você tem certeza que deseja excluir gênero {0} - {1}?', $genero->id, $genero->descricao)]) ?> </li>
            </th>
        </tr>        
        <tr>
            <th scope="row"><?= __('Id/Código') ?></th>
            <td><?= $this->Number->format($genero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($genero->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($genero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado em') ?></th>
            <td><?= h($genero->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Livros do gênero {0}', $genero->descricao) ?></h4>
        <?php if (!empty($genero->livros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id/Código') ?></th>
                <th scope="col"><?= __('Autor') ?></th>
                <th scope="col"><?= __('Título') ?></th>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('ISBN') ?></th>
                <th scope="col"><?= __('Criado em') ?></th>
                <th scope="col"><?= __('Modificado em') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($genero->livros as $livro): ?>
            <tr>
                <td><?= h($livro->id) ?></td>
                <td><?= h($livro->autor_id) ?></td>
                <td><?= h($livro->titulo) ?></td>
                <td><?= h($livro->descricao) ?></td>
                <td><?= h($livro->quantidade) ?></td>
                <td><?= h($livro->isbn) ?></td>
                <td><?= h($livro->created) ?></td>
                <td><?= h($livro->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Livros', 'action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Livros', 'action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Livros', 'action' => 'delete', $livro->id], ['confirm' => __('Você tem certeza que deseja excluir o livro {0} - {1}?', $livro->id, $livro->titulo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
