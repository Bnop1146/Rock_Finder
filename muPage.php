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

    <title>Produkt Visning</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
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

<body">

<!-- NavBar Style 3     -->
<div class="navbar-wrap pt-3 pb-3">
    <div class="container">

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand ms-2" href="#">
                <img src="./Image/Replay%20Logo%20Hvid.svg" alt="" width="100%" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto me-lg-5">
                    <li class="nav-item">
                        <a class="nav-link  ms-2 mt-3 text-uppercase text-white" href="#">desktops</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ms-2 mt-3 text-uppercase text-white" href="#">skærme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 mt-3 text-uppercase text-white" href="#">tilbehør</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-2 mt-3  mb-2 text-uppercase text-white" href="#">support</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a href="#" class="kurv ms-2"><i class="fas fa-shopping-bag text-white"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>


<div id="main" class="container mb-4 p-4 rounded-2 "></div>



    <form class="" method="post" action="insert.php" enctype="multipart/form-data">
        <div class="row">


            <div class="col-sm-6 text-white box-shadow">
                <img src="uploads/<?php echo $result->muPicture; ?>" class="mx-auto d-block rounded"
                     width="275"
                     height="275" alt="">
            </div>
            <div class="col-sm-6 " id="detail">

                <h1 class="mb-3"><b><?php echo $result->muTrack; ?></b></h1>
                <h5 class="fw-bold mb-3">
                    <p>Pris
                    <small class="text-muted"> :
                        <?php echo $result->muArtist; ?> kr/md
                    </small>
                    </p>
                </h5>

                <h5 class="fw-bold ">
                    <p>Specs</p>
                    <p>
                        <small class="text-muted">
                            <?php echo $result->muAlbum; ?>
                        </small>
                    </p>
                </h5>

                <h5 class="fw-bold ">
                    <p>
                        <small class="text-muted">
                            <?php echo $result->muGenre; ?>
                        </small>
                    </p>
                </h5>

                <h5 class="fw-bold mb-3 ">
                    <p>
                        <small class="text-muted">
                            <?php echo $result->muStyles; ?>
                        </small>
                    </p>
                </h5>



            </div>
        </div>

        <br>

    </form>








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


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f01012" fill-opacity="1" d="M0,128L1440,256L1440,320L0,320Z"></path></svg>


<footer class="footer">
    <div class="container">
        <div class="row py-5">
            <div class="col-sm-12 col-md-2 col-lg-2 m-0 m-md-0">
                <a href="#" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <img src="./Image/Replay%20Logo%20Hvid.svg" class="bi " width="100%" height="32">

                </a>
            </div>

            <div class="col-md-1 col-lg-2">

            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 m-3 m-md-0">
                <h5 class="fotover mb-2 text-white">Produkter</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="footer-link p-0 text-decoration-none text-white">Desktops</a></li>
                    <li class="nav-item mb-2"><a href="#" class="footer-link p-0 text-decoration-none text-white">Skærme</a></li>
                    <li class="nav-item mb-2"><a href="#" class="footer-link p-0 text-decoration-none text-white">Tilbehør</a></li>
                </ul>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3 m-3 m-md-0">
                <h5 class="fotover mb-2 text-white">Support</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="footer-link p-0 text-white text-decoration-none">Kontakt</a></li>
                    <li class="nav-item mb-2"><a href="#" class="footer-link p-0 text-white text-decoration-none">Om os</a></li>
                </ul>
            </div>

            <div class="co-sm-12 col-md-3 m-3 col-lg-2 m-md-0">
                <h5 class="fotover mb-3 text-white">Fang os på</h5>
                <ul class="nav flex-row">
                    <li class="me-3"><a class="text-white" href="#"><i class="sm fab fa-facebook-f"></i></a></li>
                    <li class=""><a class="text-white" href="#"><i class="sm fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top">
                <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                    <span class="copyright text-white">&copy; Copyrigt 2021. Alle rettigheder forbeholdes</span>
                </div>

                <ul class="nav col-md-4 justify-content-center justify-content-md-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-cc-visa"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-cc-paypal"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-apple-pay"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fab fa-google-pay"></i></a></li>

                </ul>
            </div>
        </div>
    </div>

</footer>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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




