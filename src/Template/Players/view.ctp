<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id), 'class' => 'btn-danger']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="players view col-lg-10 col-md-9 columns">
    <h2><?= h($player->id) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Email') ?></h6>
                    <p><?= h($player->email) ?></p>
                    <h6 class="subheader"><?= __('Name') ?></h6>
                    <p><?= h($player->name) ?></p>
                    <h6 class="subheader"><?= __('Team') ?></h6>
                    <p><?= $player->has('team') ? $this->Html->link($player->team->name, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></p>
                    <h6 class="subheader"><?= __('Event') ?></h6>
                    <p><?= $player->has('event') ? $this->Html->link($player->event->id, ['controller' => 'Events', 'action' => 'view', $player->event->id]) : '' ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns numbers end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($player->id) ?></p>
                    <h6 class="subheader"><?= __('Rsvp') ?></h6>
                    <p><?= $this->Number->format($player->rsvp) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
