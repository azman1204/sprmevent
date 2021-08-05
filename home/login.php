<?php include '../include/header1.php' ?>
<div class="card">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="login_handler.php" method="post">
            <label>User ID</label>
            <div>
                <input type="text" class="form-control" name='user_id'>
            </div>
            <label>Password</label>
            <div>
                <input type="password" class="form-control" name='password'>
            </div>
            <div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<?php include '../include/footer1.php' ?>