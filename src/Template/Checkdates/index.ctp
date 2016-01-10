<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Checkdate'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="checkdates index large-9 medium-8 columns content">
    <h3><?= __('Checkdates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('check_date') ?></th>
                <th><?= $this->Paginator->sort('has_checked') ?></th>
                <th><?= $this->Paginator->sort('check_person') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($checkdates as $checkdate): ?>
            <tr>
                <td><?= $this->Number->format($checkdate->id) ?></td>
                <td><?= h($checkdate->check_date) ?></td>
                <td><?= h($checkdate->has_checked) ?></td>
                <td><?= h($checkdate->check_person) ?></td>
                <td><?= h($checkdate->created) ?></td>
                <td><?= h($checkdate->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $checkdate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checkdate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checkdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checkdate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
