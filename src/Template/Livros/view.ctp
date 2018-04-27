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
<div class="livros view large-10 medium-8 columns content">
    <h3><?= h($livro->titulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">
                <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $livro->id], ['confirm' => __('Você tem certeza que deseja excluir livro {0} - {1}?', $livro->id, $livro->titulo)]) ?> </li>
            </th>
        </tr>         
        <tr>
            <th scope="row"><?= __('Id/Código') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= $livro->has('autore') ? $this->Html->link($livro->autore->id, ['controller' => 'Autores', 'action' => 'view', $livro->autore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Título') ?></th>
            <td><?= h($livro->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= h($livro->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($livro->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ISBN') ?></th>
            <td><?= $this->Number->format($livro->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($livro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado em') ?></th>
            <td><?= h($livro->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('{0} pertence aos gêneros:', $livro->titulo) ?></h4>
        <?php if (!empty($livro->generos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id/Código') ?></th>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Criado em') ?></th>
                <th scope="col"><?= __('Modificado em') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($livro->generos as $genero): ?>
            <tr>
                <td><?= h($genero->id) ?></td>
                <td><?= h($genero->descricao) ?></td>
                <td><?= h($genero->created) ?></td>
                <td><?= h($genero->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Generos', 'action' => 'view', $genero->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Generos', 'action' => 'edit', $genero->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Generos', 'action' => 'delete', $genero->id], ['confirm' => __('Você tem certeza que deseja excluir o gênero {0} - {1}?', $genero->id, $genero->descricao)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
