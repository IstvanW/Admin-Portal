<?PHP
session_start();

include "Database.php";

$db = new Database();

$sql="SELECT url from link where department = 1";
$db->query($sql);
$result = $db->resultSet();
?>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="tiles.css">

        <title>Support Department</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Support Department</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="logoutScript.php">Log Out <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
        </nav>
        <div class="container">  
            <div class="row justify-content-center">
              <div class="row department-title">
                <h1>
                    <strong>Support Department</strong>
                </h1>
              </div>
            </div>
          
            <div class="row justify-content-center cards-row">
                <div class="col-sm-4">
                    <a href="<?php echo $result[0]->url; ?>" class="tile red">
                    <img class="card-img-top center-block" src="icons/user.svg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="title">Manage User Account</h4>
                        <p>Edit current user accounts.</p>
                    </div>

                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="<?php echo $result[1]->url; ?>" class="tile red">
                        <img class="card-img-top center-block" src="icons/users.svg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="title">Assign Roles</h4>
                            <p>Assign roles to current users.</p>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-4">
                <a href="<?php echo $result[2]->url; ?>" class="tile red">
                    <img class="card-img-top center-block" src="icons/monitor.svg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="title">Help Desk</h4>
                        <p>Help Dest to guide users. </p>
                    </div>
                </a>
                </div>

            </div>

          </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

