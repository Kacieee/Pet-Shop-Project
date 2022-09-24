<?php 
    include 'navigation.php';
    include 'connection.php';
    $sql=$db->prepare("SELECT * FROM user_tbl");
    $sql->execute();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<h2 class=" alert alert-primary">
    <center>View Users from your website</center>
</h2>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>User Name</th>
        <th>User Email</th>
    </tr>
    <?php
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
    <tr>
        <td><?php echo $user_name?></td>
        <td><?php echo $user_email?></td>
    </tr>
    <?php } ?>
</table>