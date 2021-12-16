<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Red+Hat+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<footer class="footer">
<div class="container">
    <div class="row py-5 m-md-3">
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

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>