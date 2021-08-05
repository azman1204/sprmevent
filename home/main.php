<?php 
include '../include/header1.php';
include '../include/conn.php';
$sql = "SELECT * FROM event";
$rs = mysqli_query($conn, $sql);
$no = 1;
?>
<legend>Current Event</legend>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    <?php while($row = mysqli_fetch_array($rs)) : ?>
    <tr>
        <td><?= $no++ ?>.</td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['event_dt'] ?></td>
        <td><?= $row['status'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include '../include/footer1.php' ?><