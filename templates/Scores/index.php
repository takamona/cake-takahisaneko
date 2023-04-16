<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Score> $scores
 */
?>
<div class="persons index content">
    <?= $this->Html->link(__('New Score'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Scores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <!-- <th><?= $this->Paginator->sort('age') ?></th>
                    <th><?= $this->Paginator->sort('tel') ?></th>
                    <th><?= $this->Paginator->sort('zip') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('mail') ?></th> -->
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scores as $score): ?>
                <tr>
                    <td><?= $this->Number->format($score->id) ?></td>
                    <td><?= h($score->name) ?></td>
                    <!-- <td><?= $this->Number->format($score->age) ?></td>
                    <td><?= h($acore->tel) ?></td>
                    <td><?= h($score->zip) ?></td>
                    <td><?= h($score->address) ?></td>
                    <td><?= h($score->mail) ?></td> -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $score->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $score->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $score->id], ['confirm' => __('Are you sure you want to delete # {0}?', $score->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>