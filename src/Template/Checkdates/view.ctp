<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Checkdate'), ['action' => 'edit', $checkdate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Checkdate'), ['action' => 'delete', $checkdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkdate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Checkdates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Checkdate'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="checkdates view large-9 medium-8 columns content">
    <h3><?= h($checkdate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Check Person') ?></th>
            <td><?= h($checkdate->check_person) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($checkdate->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Check Date') ?></th>
            <td><?= h($checkdate->check_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($checkdate->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($checkdate->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Has Checked') ?></th>
            <td><?= $checkdate->has_checked ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Check Note') ?></h4>
        <?= $this->Text->autoParagraph(h($checkdate->check_note)); ?>
    </div>
</div>
