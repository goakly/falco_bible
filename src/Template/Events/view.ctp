<div class="well" id="box">
    <div class="container">

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?=($event->picture)?>">
            </div>

            <div class="col-md-4">
                <h1 class="page-header"><?= h($event->name) ?>
                </h1>
                <hr>
                <h3>Event Description</h3>
                <p><?= h($event->description) ?></p>
                <h3>Time: <?= h($event->time) ?></h3>
                <h3>Location: <?= h($event->location) ?> </h3>
                <hr>
                <center>
                    <a class="btn btn-success btn-lg" href="/players/add">Sign Up!</a>
                </center>

            </div>

        </div>
        <!-- /.row -->
    </div>
</div>
<style>
    #box{
        background-color: rgba(255, 255, 255, 0.79);
    }
</style>