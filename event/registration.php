<?php include '../include/header2.php' ?>
<legend>Event Registration</legend>
<form action="registration_handler.php" method="post">
    <div class="row">
        <div class="col-md-2">Title</div>
        <div class="col-md-6"><input type="text" class="form-control" name="title"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Description</div>
        <div class="col-md-6">
            <textarea class="form-control" name="descr"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">Date</div>
        <div class="col-md-6"><input type="date" class="form-control" name="event_dt"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Status</div>
        <div class="col-md-6">
            <input type="radio" name="status" value='O' checked> Open <br>
            <input type="radio" name="status" value='C'> Closed
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6"><input type="submit" class="btn btn-primary"></div>
    </div>
</form>
<?php include '../include/footer2.php' ?>