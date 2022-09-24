<?php 
    include 'usernavigation.php';
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

    .Image1 {
        width: 100%;
        height: 500px;
    }

    .container {
        position: absolute;
    }

    .imgtext {
        position: absolute;
        top: 290px;
        left: 16px;
        right: 800px;
        font-size: 18px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    </style>
</head>

<body>
    <div class="Container"><img src="image/Images/image1.png" alt="img1" class="Image1"></div>
    <div class="imgtext">
        <h2>The best place to buy pet products</h2> <br>
        <p>We are you’re confined in a pet store in Hlaing. Our store offers you a space for little creatures you will
            discover Cats, Dogs, Fishes just as all the material that suits them.</p>
    </div>
    <div>
        <h3 class="alert alert-info" style="margin-top: -5px; margin-bottom: -10px;"><b>
                <center>POPULAR PRODUCTS</center>
            </b></h3>
        <?php 
        include 'connection.php';
        $sql=$db->prepare("SELECT * FROM pet_tbl");
        $sql->execute();
        while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
        <div class="col-sm-4" align="center" style="margin-top: 50px;">
            <form action="viewdetail.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $itemid; ?>">
                <img src="images/<?php echo $photo;?>" width="300" height="200">
                <h5><b>Name: </b><?php echo $name;?></h5>
                <h5><b>Price: </b><?php echo $price;?></h5>
                <a href="viewdetail.php"><input type="submit" name="viewdetail" class="btn btn-primary"
                        value="View Detail"></a>
            </form>
        </div>
        <?php } ?>
    </div>
    <div>
        <?php 
    include 'footer.php';
        ?>
    </div>
</body>

</html>