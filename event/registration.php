<?php 
include_once '../include/header2.php';
// on click create event
if (! isset($event)) {
    $event = [
        'id'     => '',
        'title'  => '',
        'descr'  => '',
        'status' => 'O'
    ];
}
?>
<legend>Event Registration</legend>
<?= isset($err) ? showErr($err) : '' ?>

<script>
$(function() {
    $("#my-form").validate();
});
</script>

<form action="registration_handler.php" method="post" id="my-form">
    <input type="hidden" name="csrf" value="<?= csrf() ?>">
    <input type="hidden" name="id" value="<?= $event['id'] ?>">
    <div class="row">
        <div class="col-md-2">Title</div>
        <div class="col-md-6"><input required value="<?= $event['title'] ?>" type="text" class="form-control" name="title"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Description</div>
        <div class="col-md-6">
            <textarea required class="form-control" name="descr"><?= $event['descr'] ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Date</div>
        <div class="col-md-6"><input required value="<?= $event['event_dt'] ?>" type="date" class="form-control" name="event_dt"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Status</div>
        <div class="col-md-6">
            <input type="radio" name="status" value='O' <?= $event['status'] == 'O' ? 'checked' : '' ?>> Open <br>
            <input type="radio" name="status" value='C' <?= $event['status'] == 'C' ? 'checked' : '' ?>> Closed
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6"><input type="submit" class="btn btn-primary"></div>
    </div>
</form>
<?php include '../include/footer2.php' ?>