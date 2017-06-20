
<div class="jumbotron" id="form">
    <div class="players form col-lg-8 col-md-9 columns col-lg-offset-2">
        <?= $this->Form->create($player); ?>
        <fieldset>
            <h1><?= __('Player Signup') ?></h1>
            <hr>
            <?php
            echo $this->Form->input('event_id', ['options' => $events, 'empty' => true]);
            echo $this->Form->input('email');
            echo $this->Form->input('name');
            //echo $this->Form->input('rsvp');
            //echo $this->Form->input('team_id', ['options' => $teams, 'empty' => true]);

            ?>
        </fieldset>
        <center>
            <?php echo $this->Form->button( 'Submit <i class="glyphicon glyphicon-ok"></i>', array(
            'type' => 'submit',
            'class' => 'btn btn-success',
            'escape' => false
            )); ?>
        </center>

        <?= $this->Form->end() ?>
    </div>

</div>
<style>
    #form{
        margin: 0%;
    }
</style>