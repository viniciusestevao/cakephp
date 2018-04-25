<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Autores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autores form large-9 medium-8 columns content">
    <?= $this->Form->create($autore) ?>
    <fieldset>
        <legend><?= __('Edit Autore') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
