<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO info_om_musikerne (muArtist, muTrack, muDuration, prodBeskrivelse) VALUES (:muArtist, :muTrack, :muDuration, :prodBeskrivelse)";
    $bind = [":muArtist" => $data["muArtist"], ":muTrack" => $data["muTrack"], ":muDuration" => $data["muDuration"], "prodBeskrivelse" => $data["prodBeskrivelse"]];

    $db->sql($sql, $bind, false);

    echo "produktet er nu indsat. <a href='insert.php'>Indsæt et produkt mere</a>";
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>

<body>


<div class="container">
    <form class="m-5" method="post" action="insert.php">
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
                           placeholder="00,00,00" value="00.00.00" step="1" min="00.00.00">
                </div>
            </div>


            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="muAlbum">Album</label>
                    <input class="form-control" type="text" name="data[muAlbum]" id="muAlbum"
                           placeholder="Name of the album, the track origins from" value="">
                </div>
            </div>

            <div class="col-12 col-md-2 mb-4">
                <div class="form-group">
                    <label for="muRelease">Release date</label>
                    <input class="form-control" type="date" name="data[muRelease]" id="muRelease"
                           placeholder="Date of Release" value="">
                </div>
            </div>

            <div class="col-12 col-md-5 mb-4">
                <div class="form-group">
                    <label for="muGenre">Duration</label>
                    <input class="form-control" type="text" name="muGenre]" id="muGenre"
                           placeholder="Genre of the track" value="" >
                </div>
            </div>


            <div class="col-12">
                <div class="form-group"
                <label for="prodBeskrivelse">Produkt Beskrivelse</label>
                <textarea class="form-control" name="data[prodBeskrivelse]" id="prodBeskrivelse"
                          placeholder="Produkt Beskrivelse"></textarea>
            </div>
        </div>

        <div class="col-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret Produkt</button>
        </div>


    </form>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>

</body>
</html>

