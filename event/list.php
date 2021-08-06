<?php include '../include/header2.php' ?>
<legend>Event List</legend>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM event";
    $rows = $db->findAll($sql);
    $no = 1;
    foreach ($rows as $row) :
    ?>
    <tr>
        <td><?= $no++ ?>.</td>
        <td><?= $row['title'] ?></td>
        <td><?= date('d/m/Y', strtotime($row['event_dt'])) ?></td>
        <td>
            <a href=''>edit</a> |
            <a href=''>delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php include '../include/footer2.php' ?>