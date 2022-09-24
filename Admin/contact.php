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
    <div>
        <div>
            <div>
                <form action="contact.php" method="post">
                    <label for="Name">Name:</label> <br>
                    <input type="text" placeholder="Enter your name" class="form-control" name="name"> <br>
                    <label for="Name">Phone:</label> <br>
                    <input type="text" placeholder="Enter your phone" class="form-control" name="phone"> <br>
                    <label for="Name">Email:</label> <br>
                    <input type="text" placeholder="Enter your mail" class="form-control" name="email"> <br>
                    <label for="Name">Feedback:</label> <br>
                    <textarea class="form-control" rows="5" name="feedback"></textarea>
                    <br>
                    <input type="submit" value="Submit" class="btn btn-success" name="submit">
                    <input type="reset" value="Cancel" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    if(isset($_POST['submit'])) {
        try{
            $sql="INSERT INTO comment_tbl(name, phone, email, feedback) VALUES (?,?,?,?)";
            $sq=$db->prepare($sql);

            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $feedback=$_POST['feedback'];

            if($sq->execute(array($name, $phone, $email, $feedback))) {
                header('location: commentupload.php');
            }
        }  catch(Exception $e) {
            echo $e->getMessage();
        }
    }
   
?>