<?php // Connecting to the Database
$servername="localhost";
$username="root";
$password="";
$database="users";

$conn=mysqli_connect($servername, $username, $password, $database);

if ( !$conn) {
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql="SELECT * FROM `userdata`";
$result=mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Customers</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
        <style>
            footer {
                position: fixed;
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

            table {
                height: 80%;
                width: 50%;
                justify-content: center;
                text-align: center;

            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
            <div class="container-fluid"><a class="navbar-brand" href="#">WZ BANK</a><button class="navbar-toggler"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mb-2 mb-lg-0 ml-auto ">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="adduser.php">Add Customer</a></li>
                        <li class="nav-item"><a class="nav-link" href="view.php">View Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="transferfrom.php">Money Transfer</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container"><br>
            <center><h1>List of Customers:</h1></center>
            <br><br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)) {
    $sno=$row['sno'];
    $name=$row['name'];
    $email=$row['email'];
    $balance=$row['balance'];
    echo '<tr>
<th scope="row">'.$sno.'</th><td>'.$name.'</td><td>'.$email.'</td><td>'.$balance.'</td></tr>';

}
?></tbody>
            </table><br><br>
            <center><a class="btn btn-success" href="transferfrom.php" role="button">Transfer Money</a></center>
        </div>
        <footer class="w3-container w3-padding-50 w3-center w3-opacity w3-black w3-large">
        <h4>Created by Shaurya</h4>
        <a href="https://github.com/Shaurya0237"><i class="fa fa-github w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/in/shaurya-kaushal-8068471b5/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
        <p class="w3-medium">© Copyright 2021 <a href="">Wizard Bank.</a>
        </p>
</footer>
    </body>

    </html>