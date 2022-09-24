<?php 
    include 'usernavigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
    .About {
        /* border: 1px solid red; */
        width: 600px;
        float: left;
        margin-left: 40px;
        height: 400px;
    }

    .Image2 {
        width: 100%;
        height: 340px;
    }

    .Aboutusbody {
        /* border: 1px solid red; */
        height: 980px;
    }

    .blogcontainer {
        width: 100%;
        margin-top: 400px;
    }

    .blog {
        border: 1px solid rebeccapurple;
        height: 460px;
        width: 390px;
        float: left;
        margin-left: 40px;
        background-color: #C8C6C6;
        border-radius: 20px;
    }

    .blogimg {
        width: 100%;
        height: 250px;
        border-radius: 20px;
    }

    .readmore {
        background-color: #1b0101;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        float: right;
        border-radius: 50px;
        margin-right: 5px;
    }

    .readmore:hover {
        background-color: #4B6587;
    }
    </style>
</head>

<body>
    <div class="Aboutusbody">
        <div>
            <div class="About">
                <h2>The story of NEKO CHAN</h2> <br>
                <p>Established in 2020, NEKO CHAN, Inc. is the biggest strength pet retailer of administrations and
                    answers for the lifetime needs of pets. At NEKO CHAN , we cherish pets, and we trust pets improve us
                    as individuals. Consistently with each association, NEKO CHAN's enthusiastic partners help convey
                    pet guardians closer to their pets so they can live progressively satisfying lives.

                    This vision impacts all that we improve the situation of our clients, the manner in which we bolster
                    our partners, and how we offer back to our networks.

                    We utilize around 20 partners and work in excess of 3 pet stores in Yangon, Mandalay and Pyin Oo
                    Lwin.

                    NEKO CHAN gives a wide scope of competitively estimated pet sustenance and items and offers
                    one-of-a-kind pet administrations including preparing, pet prepping and in-store pet receptions.

                    Master veterinarian care is accessible in huge numbers of our stores.

                    NEKO CHAN, together with non-benefits "Dog Lovers" Charities to bring adoptable pets into stores so
                    they have the most obvious opportunity conceivable of finding an eternity home.

                </p>
            </div>
            <div class="About"><img src="image/Images/aboutus.jpg" alt="img2" class="Image2"></div>
        </div> <br>
        <div class="blogcontainer">
            <center>
                <h1>Our Blogs</h1>
            </center>
            <div class="blog">
                <img src="image/Images/blog1.jpg" alt="blog1" class="blogimg">
                <h4>Blog 1</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum eaque totam, dignissimos numquam
                    nihil quos. Est quod dicta et, in ipsum iure, ab ad tenetur nam, esse reiciendis delectus molestiae?
                </p>
                <a href="#" class="readmore">Read more</a>
            </div>
            <div class="blog">
                <img src="image/Images/blog2.jpg" alt="blog2" class="blogimg">
                <h4>Blog 2</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum eaque totam, dignissimos numquam
                    nihil quos. Est quod dicta et, in ipsum iure, ab ad tenetur nam, esse reiciendis delectus molestiae?
                </p>
                <a href="#" class="readmore">Read more</a>
            </div>
            <div class="blog">
                <img src="image/Images/blog3.avif" alt="blog3" class="blogimg">
                <h4>Blog 3</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum eaque totam, dignissimos numquam
                    nihil quos. Est quod dicta et, in ipsum iure, ab ad tenetur nam, esse reiciendis delectus molestiae?
                </p>
                <a href="#" class="readmore">Read more</a>
            </div>
        </div>
    </div>
</body>

</html>


<div>
    <?php 
    include 'footer.php';
    ?>
</div>