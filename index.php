<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Reggae+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
     <style>
        footer {
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }

        body {
            background-color: rgb(255, 255, 255);
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: 500px;
            opacity: 0.4;
        }

        .centered {
            font-family: 'Pattaya', sans-serif;
            font-family: 'Reggae One', cursive;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .lft{
               margin-left:200px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WZ BANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0 ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adduser.php">Add Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">View Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transferfrom.php">Money Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <img src="https://source.unsplash.com/1200x500/?money bank,dollar,cash,gold" class="center">
    <div class="centered">
        <h1>
            Welcome to The Wizard Bank
        </h1>
        <br> <br>
        <center>
            <h3>Transfer your money via MAGIC!</h3>
            <h4>Easy and Quick Money Transfer </h4>
        </center>
    </div>
    <br><br>
    <div class="row text-center  lft">
        <div class="col-sm-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <img src="https://assets-global.website-files.com/5db35de024bb983af1b4e151/5eb274abca48d15ef5598b93_og-image-security.png"
                        class="card-img-top" alt="..."><br>
                    <br>
                    <h6 class="card-subtitle mb-2 text-muted">Security</h6>
                    <p class="card-text">100% Safe and Secure.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <img src="data:image/png;base64,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"
                        class="card-img-top" height="160px" alt="..."><br>
                    <br>
                    <h6 class="card-subtitle mb-2 text-muted">Fast Transactions</h6>
                    <p class="card-text">Quick and hassle free experience.</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <img src="data:image/png;base64,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"
                        class="card-img-top" height="160px" alt="..."><br>
                    <br>
                    <h6 class="card-subtitle mb-2 text-muted">Easy to Understand</h6>
                    <p class="card-text">User-friendly System.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid description text-center"
        style="padding: 3rem; padding-top: 6rem; padding-bottom: 6rem;">
        <div class="container">
            <h1>THE WIZARD BANK!</h1>
            <h2>Online services to manage your Money.</h2><br>
            <a href="transferfrom.php"><button type="button" class="btn btn-outline-secondary btn-lg">Transfer
                    Amount</button></a>
            <a href="view.php"><button type="button" class="btn btn-outline-secondary btn-lg">View
                    Customers</button></a>
        </div>
    </div>
    <br><br>
    <footer class="w3-container w3-padding-50 w3-center w3-opacity w3-black w3-large">
        <h4>Created by Shaurya</h4>
        <a href="https://github.com/Shaurya0237"><i class="fa fa-github w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/in/shaurya-kaushal-8068471b5/"><i
                class="fa fa-linkedin w3-hover-opacity"></i></a>
        <p class="w3-medium">© Copyright 2021 <a href="">Wizard Bank.</a>
        </p>
    </footer>
</body>

</html>