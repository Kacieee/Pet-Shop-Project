<?php 
    include 'usernavigation.php';
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body {
        overflow-x: hidden;
    }
    </style>
</head>

<body>
    <h3 class="alert alert-info" style="margin-top: -20px; margin-bottom: -10px;">
        <center>SEARCH RESULT for <b>"<?php echo $_POST['searching']?>"</b></center>
    </h3>
    <?php 
        $search=$_POST['searching'];
        $sql=$db->prepare("SELECT * FROM pet_tbl WHERE name LIKE '%$search%'");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
    <div class="col-sm-4" align="center" style="margin-top: 50px;">
        <form action="viewdetail.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $itemid; ?>">
            <img src="images/<?php echo $photo;?>" width="200" height="150">
            <h5><b>Name: </b><?php echo $name;?></h5>
            <h5><b>Price: </b><?php echo $price;?></h5>
            <input type="submit" name="viewdetail" class="btn btn-primary" value="View Detail">
        </form>
    </div>
    <?php } ?>
</body>

</html>