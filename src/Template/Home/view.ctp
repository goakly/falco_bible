<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Edit Home'), ['action' => 'edit', $home->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home'), ['action' => 'delete', $home->id], ['confirm' => __('Are you sure you want to delete # {0}?', $home->id), 'class' => 'btn-danger']) ?> </li>
        <li><?= $this->Html->link(__('List Home'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="home view col-lg-10 col-md-9 columns">
    <h2><?= h($home->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Homedate') ?></h6>
                    <p><?= h($home->homedate) ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns numbers end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($home->id) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
