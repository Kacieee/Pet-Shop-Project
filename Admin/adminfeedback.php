<?php 
    include 'navigation.php';
    include 'connection.php';
    $sql=$db->prepare("SELECT * FROM comment_tbl");
    $sql->execute();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<h2 class=" alert alert-primary">
    <center>View Feedbacks from your website</center>
</h2>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Phone Number</th>
        <th>Feedback</th>
    </tr>
    <?php
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
    <tr>
        <td><?php echo $name?></td>
        <td><?php echo $email?></td>
        <td><?php echo $phone?></td>
        <td><?php echo $feedback?></td>
    </tr>
    <?php } ?>
</table>