<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>LARP Blog</title>
    <?php require "core/loginhandler.php" ?>
</head>

<body class="container pt-3 bg-secondary text-white">
    <header class="m-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 fixed-top">
            <a class="navbar-brand text-muted text-uppercase">My Blog</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="my-nav" class="collapse navbar-collapse">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="about-me.php">Chi sono</a>
                </div>
                <?php if (isLogged()) { ?>
                    <div class="navbar-nav ml-md-auto d-none d-md-flex">
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-secondary"><a class="nav-item nav-link" href="logout.php">Logout</a></button>
                            <button type="button" class="btn btn-secondary"><a class="nav-item nav-link" href="new-post.php">Post</a></button> 
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="navbar-nav ml-md-auto d-none d-md-flex">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#staticBackdrop">Login</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </nav>
    </header>
    