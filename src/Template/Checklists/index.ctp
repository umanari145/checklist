<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Checklist'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="checklists index large-9 medium-8 columns content">
    <h3><?= __('Checklists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('item') ?></th>
                <th><?= $this->Paginator->sort('meta_deleted') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($checklists as $checklist): ?>
            <tr>
                <td><?= $this->Number->format($checklist->id) ?></td>
                <td><?= h($checklist->item) ?></td>
                <td><?= h($checklist->meta_deleted) ?></td>
                <td><?= h($checklist->created) ?></td>
                <td><?= h($checklist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $checklist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $checklist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $checklist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $checklist->id)]) ?>
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
