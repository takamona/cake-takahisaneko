<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Score $score
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Scores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="scores form content">
            <?= $this->Form->create($score) ?>
            <fieldset>
                <legend><?= __('Add Score') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('score');
                    // echo $this->Form->control('tel');
                    // echo $this->Form->control('zip');
                    // echo $this->Form->control('address');
                    // echo $this->Form->control('mail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>