<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
    .footer {
        background-color: #c8c6c662;
        height: 360px;
    }

    .about {
        /* border: 1px solid red; */
        width: 360px;
        height: 260px;
        float: left;
        margin-top: 40px;
        margin-left: 30px;
        margin-right: 30px;
    }

    .footernav {
        font-size: 14px;
        text-decoration: none;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        color: #4B6587;
    }

    .footernav:hover {
        color: #2e3f55;
    }

    h1,
    h4,
    h2,
    h3,
    p,
    td,
    text {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #4B6587;
    }
    </style>
</head>

<body>
    <div class="absolute-bottom">
        <div class="about">
            <h3>About Us</h3>
            <p>Welcome to NEKO CHAN pet shop, your number one source for all things [pet products, ie: cat beds, pet
                food, dog treats]. We're dedicated to giving you the very best of pet products, with a focus on three
                characteristics, ie: dependability, customer service and uniqueness.</p>
        </div>
        <div class="about">
            <h3>Contact</h3>
            <table>
                <tr>
                    <td>Address:</td>
                    <td>No.62, Holly St, 3<sup>rd</sup> Block, Hlaing Township.</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>+95942981234/+9594328103</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>Nekoneko@hotmail.com</td>
                </tr>
            </table>
        </div>
        <div class="about">
            <h3>Sites Navigation</h3>
            <div><a href="Home.php" class="footernav">HOME</a></div> <br>
            <div><a href="product.php" class="footernav">PRODUCTS</a></div> <br>
            <div><a href="Aboutus.php" class="footernav">ABOUT US</a></div> <br>
            <div><a href="Contact.php" class="footernav">CONTACT</a></div> <br>
            <div><a href="FAQs.php" class="footernav">FAQ</a></div>
        </div><br>
    </div>
</body>
</body>

</html>