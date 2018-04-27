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
<div class="locacoes view large-9 medium-8 columns content">
    <h3><?= h($locaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row">
                <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $locaco->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $locaco->id], ['confirm' => __('Você tem certeza que deseja excluir locação {0}?', $locaco->id)]) ?> </li>
            </th>
        </tr>   
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $locaco->has('livro') ? $this->Html->link($locaco->livro->titulo, ['controller' => 'Livros', 'action' => 'view', $locaco->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $locaco->has('user') ? $this->Html->link($locaco->user->id, ['controller' => 'Users', 'action' => 'view', $locaco->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($locaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Locacao') ?></th>
            <td><?= h($locaco->data_locacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Vencimento') ?></th>
            <td><?= h($locaco->data_vencimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Devolucao') ?></th>
            <td><?= h($locaco->data_devolucao) ?></td>
        </tr>
    </table>
</div>
