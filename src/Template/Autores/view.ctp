
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
<div class="autores view large-9 medium-8 columns content">
    <h3><?= h($autore->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">
                <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $autore->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $autore->id], ['confirm' => __('Você tem certeza que deseja excluir autor {0} - {1}?', $autore->id, $autore->nome)]) ?> </li>
            </th>
        </tr>
        <tr>
            <th scope="row"><br></th>
        </tr>
        <tr>
            <th scope="row"><?= __('Código') ?></th>
            <td><?= $this->Number->format($autore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($autore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado em') ?></th>
            <td><?= h($autore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado em') ?></th>
            <td><?= h($autore->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Livros de {0}', $autore->nome) ?></h4>
        <?php if (!empty($autore->livros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('id') ?></th>
                <th scope="col"><?= __('titulo') ?></th>
                <th scope="col"><?= __('descricao') ?></th>
                <th scope="col"><?= __('quantidade') ?></th>
                <th scope="col"><?= __('isbn') ?></th>
                <th scope="col"><?= __('created') ?></th>
                <th scope="col"><?= __('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($autore->livros as $livro): ?>
            <tr>
                <td><?= h($livro->id) ?></td>
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
