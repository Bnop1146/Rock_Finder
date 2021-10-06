<?php
require "settings/init.php";

$sql = "SELECT * FROM info_om_musikerne WHERE rockId = :rockId";
$bind = [":rockId" => $_GET["rockId"]];
$result = $db->sql($sql, $bind);
$result = $result[0];
?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Rock Finder</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>

<body class="text-white">


<nav class="navbar bg-dark navbar-light justify-content-between p-5">
    <a class="navbar-brand fw-bold text-white"><h2>Rock Finder
            <small class="text-muted">By the People for the Rockers</small>
        </h2></a>

    <form class="form-inline">
        <a href="index.html">
            <div class="btn btn-outline-light btn-floating btn-rounded m-1">
                <i class="fas fa-home">Return Home</i>
            </div>
        </a>
    </form>
</nav>

<div id="main" class="container mb-4 p-4 rounded-2 ">


    <hr class=" mt-3 bg-black">

    <form class="m-5" method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">


            <div class="col-sm-4 text-white box-shadow">
                <img src="uploads/<?php echo $result->muPicture; ?>" class="mx-auto d-block rounded imgMuPage"
                     width="275"
                     height="275" alt="">
            </div>
            <div class="col-sm-8 " id="detail">
                <p>Track from your Library</p>
                <h1><b><?php echo $result->muTrack; ?></b></h1>
                <h5 class="fw-bold">
                    <small class="text-muted">Artist :</small>
                    <?php echo $result->muArtist; ?>
                </h5>
                <p>
                    <small class="text-muted">Genre :</small>
                    <?php echo $result->muGenre; ?>
                </p>
                <button href="https://open.spotify.com/album/2p7EHDph1VrRTfgF9YpzCQ" class="btn text-white">Play
                </button>
                <span><button class="btn"><i class="fa fa-heart-o text-white"></i></button></span>
                <span><button class="btn text-white"><b>...</b></button></span>
            </div>
        </div>

        <br>

        <table class="table text-white col-md-3 ">
            <thead>
            <tr>
                <td>#</td>
                <td>Album</td>
                <td>Release Date</td>
                <td><i class="fa fa-clock-o"></i></td>
                <td><i class="fas fa-dollar-sign"></i></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $result->muAlbum; ?></td>
                <td><?php echo $result->muRelease; ?></td>
                <td><?php echo $result->muDuration; ?></td>
                <td><?php echo $result->muPrice; ?></td>
            </tr>


            </tbody>
        </table>

        <br>

        <div class="row d-flex align-items-center justify-content-sm-evenly">

            <div class="col-md-5 list-group list-group-flush  ">
                <h4 class=" text-white">Current Members <i class="fas fa-user-friends"></i></h4>
                <h5 class="list-group-item bg-transparent text-white"><?php echo $result->muMembers; ?> </h5>
            </div>


            <div class="col-md-5 list-group list-group-flush ">
                <h4 class="fab fa-studiovinari text-white">Music Style/s</h4>
                <h5 class="list-group-item bg-transparent text-white"><?php echo $result->muStyles; ?></h5>
            </div>

        </div>


</div>


<hr class=" mt-3 bg-black">


<footer class="bg-dark text-center text-white">
    <div class="container p-2 pb-0">
        <section class="mb-2">


            <p class="d-flex justify-content-center align-items-center p-2">
                <span class="me-3">Help us Expand</span>
                <a class="btn btn-outline-light btn-floating btn-rounded m-1" href="insert.php"
                   role="button">Insert New Album</a>
            </p>


            <a class="btn btn-outline-light btn-floating btn-rounded m-1" href="https://www.google.dk/" role="button"
            ><i class="fab fa-google"></i
                ></a>


            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Bnop1146/Rock_Finder"
               role="button"
            ><i class="fab fa-github"></i
                ></a>
        </section>

    </div>

    <div class="text-center p-3 bg-black">
        © 2021 Copyright:
        <a class="text-white">Bnopone</a>
    </div>

</footer>


<!--
<div class="col-3 ">
    <button class=" btn btn-danger"  type="submit" id="btnSubmit"  data-toggle="modal" data-target="#exampleModal">Create Artist</button>
</div>
-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert Completed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" type="button" href="insert.php" role="button">Insert New Artist</a>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
        menubar: false
    });

    const url = new URL(window.location.href);
    const status = url.searchParams.get("status");

    const modal = document.querySelector('.modal');
    const bsModal = new bootstrap.Modal(modal);

    modal.addEventListener('hide.bs.modal', () => {
        window.history.replaceState(null, null, window.location.pathname);
    })

    if (status === "1") {
        bsModal.show();
    }

</script>

</body>
</html>




