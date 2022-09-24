<?php 
    include 'usernavigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="PetShopProject.css" rel="stylesheet">
    </link>
    <style>
    .FAQbody {
        height: 850px;
    }

    .question {
        background-color: #8498a133;
        width: 70%;
        height: 40px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
    }

    .answer {
        background-color: #8498a133;
        width: 70%;
        height: 130px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;
    }

    .question text,
    .answer p {
        font-size: 20px;
        padding: 10px;
    }

    .morebtn {
        background-color: #2e3f55;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 50px;
        margin-right: 5px;
        float: right;
        margin-right: 200px;
    }

    .morebtn:hover {
        background-color: #1c2531;
    }

    .Image3 {
        width: 100%;
        height: 550px;
    }
    </style>
</head>

<body>
    <div class="FAQbody">
        <center>
            <h1>Frequently Asked Questions</h1>
        </center>
        <div class="question">
            <text>Q1. How can we order the products we want?</text>
        </div> <br>
        <div class="answer">
            <p>
                You can order the goods you'd like to buy both from the website and from phone calls. The service hours
                are from 9AM to 4PM, closing day is Sunday.
            </p>
        </div> <br><br>
        <div class="question">
            <text>Q2. How many days does it take to deliver the orders?</text>
        </div> <br>
        <div class="answer">
            <p>
                It depends on the location from which the customer is ordering. You can view the duration for delivery
                here at this <a href="#">link</a>.
            </p>
        </div> <br><br>
        <div class="question">
            <text>Q3. From which country are the products originated from?</text>
        </div> <br>
        <div class="answer">
            <p>
                All the products are imported directly from Bangkok.
            </p>
        </div> <br>
        <a href="#" class="morebtn">More</a>
    </div>
    <div>
        <?php 
    include 'footer.php';
        ?>
    </div>
</body>

</html>