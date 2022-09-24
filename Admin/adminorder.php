<?php 
    include 'navigation.php';
    include 'connection.php';
    $sql=$db->prepare("SELECT * FROM order_tbl");
    $sql->execute();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<h2 class=" alert alert-primary">
    <center>View Orders from your website</center>
</h2>
<table class="table table-dark table-striped table-hover">
    <tr>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Product name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
    <tr>
        <td><?php echo $customer_name?></td>
        <td><?php echo $customer_email?></td>
        <td><?php echo $product_name?></td>
        <td><?php echo $price?></td>
        <td><?php echo $quantity?></td>
    </tr>
    <?php } ?>
</table>