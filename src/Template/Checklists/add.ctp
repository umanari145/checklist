<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Checklists'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="checklists form large-9 medium-8 columns content">
    <?= $this->Form->create($checklist) ?>
    <fieldset>
        <legend><?= __('Add Checklist') ?></legend>
        <?php
            echo $this->Form->input('item');
            echo $this->Form->input('meta_deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
