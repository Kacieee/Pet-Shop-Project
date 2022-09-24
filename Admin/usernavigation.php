<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Neko Chan Pet Shop</title>
    <style>
    nav {
        height: 100px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="image/Images/NEKO CHAN.png" alt="Logo" width="70px" height="70px" style="border-radius: 70%;">
            <div>
                <h4>NEKO CHAN PET SHOP</h4>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    <a class="nav-link" href="product.php">Products</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="Aboutus.php">About Us</a>
                    <a class="nav-link" href="FAQs.php">FAQs</a>
                </div>
            </div>
            <form method="post" action="searchprocess.php" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" name="searching"
                    aria-label="Search">
                <button class="btn btn-outline-primary" type="submit" name="search" value="Search">Search</button>
            </form>
        </div>

        <div>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>