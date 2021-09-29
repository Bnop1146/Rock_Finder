<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;

    if (!empty($file["muPicture"]["tmp_name"])) {
        move_uploaded_file($file["muPicture"]["tmp_name"], "uploads/" . basename($file["muPicture"]["name"]));

    }


    $sql = "INSERT INTO info_om_musikerne (muArtist, muTrack, muDuration, muAlbum, muRelease, muGenre, muStyles, muMembers, muPrice, muPicture) VALUES 
                                        (:muArtist, :muTrack, :muDuration, :muAlbum, :muRelease, :muGenre, :muStyles, :muMembers, :muPrice, :muPicture)";
    $bind = [
        ":muArtist" => $data["muArtist"],
        ":muTrack" => $data["muTrack"],
        ":muDuration" => $data["muDuration"],
        "muAlbum" => $data["muAlbum"],
        "muRelease" => $data["muRelease"],
        "muGenre" => $data["muGenre"],
        "muStyles" => $data["muStyles"],
        "muMembers" => $data["muMembers"],
        "muPrice" => $data["muPrice"],
        "muPicture" => (!empty($file["muPicture"]["tmp_name"])) ? $file["muPicture"]["name"] : NULL,
    ];

    $db->sql($sql, $bind, false);

    header("Location: insert.php?status=1");
    exit;

}


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

<body class="bg-gradient-danger text-white">


<div id="main" class="container mb-4 p-4 bg-dark bg-opacity-10 rounded-2 ">

    <h3 class="p-3  ">
        Rock On Library
        <small class="text-muted text-break">Helping Rockers Since 2021</small>
    </h3>

    <hr class="p-1">

    <form class="m-5" method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">


            <div class="col-sm-4 text-white box-shadow">
                <img src="uploads/Five%20Finger%20Death%20Punch.jpg" class="mx-auto d-block rounded" width="275"
                     height="275" alt="">
            </div>
            <div class="col-sm-8 " id="detail">
                <p>Track from your Library</p>
                <h1><b>Wrong Side Of Heaven</b></h1>
                <h5 class="fw-bold">
                    <small class="text-muted">Artist :</small>
                    Five Finger Death Punch
                </h5>
                <p>
                    <small class="text-muted">Genre :</small>
                    Heavy Metal
                </p>
                <button href="https://open.spotify.com/album/2p7EHDph1VrRTfgF9YpzCQ" class="btn text-white">Play
                </button>
                <span><button class="btn"><i class="fa fa-heart-o text-white"></i></button></span>
                <span><button class="btn text-white"><b>...</b></button></span>
            </div>
        </div>

        <br>

        <table class="table text-white ">
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
                <td>The Wrong Side Of Heaven And The Righteous Side Of Hell</td>
                <td>2013</td>
                <td>4:31</td>
                <td>11.99</td>
            </tr>


            </tbody>
        </table>

        <br>

        <div class="row">
            <ul class="col-md-5 list-group list-group-flush ">
                <h4 class="fas fa-user-friends text-white">Current Members</h4>
                <li class="list-group-item bg-transparent text-white">Ivan Moody
                    <p class="text-white-50">Lead Vocalist</p>
                </li>
                <li class="list-group-item bg-transparent text-white">Andy James
                    <p class="text-white-50">Lead Guitar, Backing Vocal</p>
                </li>
                <li class="list-group-item bg-transparent text-white">Charlie Engen
                    <p class="text-white-50">Drums</p>
                </li>
                <li class="list-group-item bg-transparent text-white">Chris Kael
                    <p class="text-white-50">Bass, Backing Vocals</p>
                </li>
                <li class="list-group-item bg-transparent text-white">Zoltan Bathory
                    <p class="text-white-50">Rhythm Guitar</p>
                </li>
            </ul>


            <ul class="col-md-5 list-group list-group-flush ">
                <h4 class="fab fa-studiovinari text-white">Music Style/s</h4>
                <li class="list-group-item bg-transparent text-white">Heavy Metal</li>
                <li class="list-group-item bg-transparent text-white">Speed/Thrash Metal</li>
                <li class="list-group-item bg-transparent text-white">Nü Metal</li>
            </ul>

        </div>


</div>


<hr class="p-1 mt-3">


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




