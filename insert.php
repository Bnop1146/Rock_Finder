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

<body>


<nav class="navbar bg-dark navbar-light justify-content-between p-5 mb-5">
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


<div class="container mb-4 p-4 bg-dark bg-opacity-10 rounded-2 text-white ">

    <hr class="p-1">

    <form class="m-5" method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="muArtist">Artist</label>
                    <input class="form-control" type="text" name="data[muArtist]" id="muArtist"
                           placeholder="Name of the Artist" value="">
                </div>
            </div>

            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="muTrack">Track Name</label>
                    <input class="form-control" type="text" name="data[muTrack]" id="muTrack"
                           placeholder="Name of the Track" value="">
                </div>
            </div>

            <div class="col-12 col-md-2 mb-4">
                <div class="form-group">
                    <label for="muDuration">Duration</label>
                    <input class="form-control" type="time" name="data[muDuration]" id="muDuration"
                           placeholder="00,00,00" value="00.00.00" min="00.00" step="1">
                </div>
            </div>


            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="muAlbum">Album</label>
                    <input class="form-control" type="text" name="data[muAlbum]" id="muAlbum"
                           placeholder="Name of the album, the track origins from" value="">
                </div>
            </div>

            <div class="col-12 col-md-3 mb-4">
                <div class="form-group">
                    <label for="muRelease">Release date</label>
                    <input class="form-control" type="time" name="data[muRelease]" id="muRelease"
                           placeholder="Date" value="">
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="form-group">
                    <label for="muGenre">Genre</label>
                    <input class="form-control" type="text" name="data[muGenre]" id="muGenre"
                           placeholder="Genre of the track" value="">
                </div>
            </div>


            <div class="col-6 col-md-6 mb-4 rounded ">
                <div class="form-group"
                <label for="muMembers">Band Members</label>
                <textarea class="form-control" name="data[muMembers]" id="muMembers"
                          placeholder="Members of the group"></textarea>
            </div>
        </div>

        <div class="col-6 col-md-6 mb-4 rounded ">
            <div class="form-group"
            <label for="muStyles">Styles of the Artist</label>
            <textarea class="form-control" name="data[muStyles]" id="muStyles"
                      placeholder="Describe the Artist Style/s"></textarea>
        </div>
</div>


<div class="col-3 input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">$</span>
    </div>
    <label for="muPrice"></label>
    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="data[muPrice]"
           id="muPrice"
           placeholder="Price for the Album in $">
    <div class="input-group-append">
        <span class="input-group-text">.00</span>
    </div>
</div>


<div class="col-12">
    <label class="form-label" for="muBillede">Album Cover Image</label>
    <input type="file" class="form-control" id="muBillede" name="muPicture">
</div>


<hr class="p-1 mt-3">


<div class="col-3 ">
    <button class=" btn btn-primary text-white-50" type="submit" id="btnSubmit" data-toggle="modal"
            data-target="#exampleModal">Create Artist
    </button>
</div>


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

