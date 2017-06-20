<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li class="active disabled"><?= $this->Html->link(__('New Home'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="home form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($home); ?>
    <fieldset>
        <legend><?= __('Add Home') ?></legend>
        <?php
            echo $this->Form->input('homedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
