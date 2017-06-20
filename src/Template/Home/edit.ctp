<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li class="active disabled"><?= $this->Html->link(__('Edit Home'), ['action' => 'edit', $home->id]) ?> </li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $home->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $home->id), 'class' => 'btn-danger']
            )
        ?></li>
        <li><?= $this->Html->link(__('New Home'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="home form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($home); ?>
    <fieldset>
        <legend><?= __('Edit Home') ?></legend>
        <?php
            echo $this->Form->input('homedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
