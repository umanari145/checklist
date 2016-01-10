<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Checkdates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="checkdates form large-9 medium-8 columns content">
    <?= $this->Form->create($checkdate) ?>
    <fieldset>
        <legend><?= __('Add Checkdate') ?></legend>
        <?php
            echo $this->Form->input('check_date');
            echo $this->Form->input('has_checked');
            echo $this->Form->input('check_person');
            echo $this->Form->input('check_note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
