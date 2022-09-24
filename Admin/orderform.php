<?php 
    include 'connection.php';
    include 'usernavigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
    .form {
        width: 200px;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <?php 
        $id=$_POST['id'];
        $sql = $db->prepare("SELECT * FROM pet_tbl WHERE itemid='$id'");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
    <form action="orderform.php" method="POST" align="center" style="margin-left: auto; margin-right: auto;">
        <input type="hidden" name="id" value="<?php echo $itemid; ?>">
        <div class="form">
            <label for="ItemName">Item Name</label>
            <input type="text" class="form-control" value="<?php echo $name?>" name="itemname">
        </div>
        <div class="form">
            <label for="Price">Price</label>
            <input type="text" class="form-control" value="<?php echo $price?>" name="price">
        </div>
        <div class="form">
            <label for="Quantity">Quantity</label>
            <input type="text" class="form-control" value="<?php echo $_POST['qty']?>" name="qty">
        </div>
        <div class="form">
            <label for="CustomerName">Customer Name</label>
            <input type="text" class="form-control" name="cusname">
        </div>
        <div class="form">
            <label for="CustomerEmail">Customer Email</label>
            <input type="text" class="form-control" name="cusemail">
        </div>
        <div class="form">
            <label for="TotalAmount">Total Amount</label>
            <input type="text" class="form-control" name="total"
                value="<?php echo $_POST['price'] * $_POST['qty']; ?>"><br>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="OrderConfirm">
    </form>
    <?php } ?>
    <!-- Add to order_tbl -->
    <?php
    if(isset($_POST['submit'])) {
    try{
        $sql="INSERT INTO order_tbl(customer_name, customer_email, product_name, price, quantity) VALUES (?,?,?,?,?)";
        $sq=$db->prepare($sql);
    
        $cusname=$_POST['cusname'];
        $cusemail=$_POST['cusemail'];
        $itemname=$_POST['itemname'];
        $itemprice=$_POST['price'];
        $qty=$_POST['qty'];
    
        if($sq->execute(array($cusname, $cusemail, $itemname, $itemprice, $qty))) {
        header ('location: orderconfirm.php');
        }
        } catch(Exception $e) {
        echo $e->getMessage;
        }
    }
    ?>
</body>

</html>