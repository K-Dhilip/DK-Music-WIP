<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <navbar class="bgs">
            <img src="./images/Logo.png" alt="">
            <a href="./admin.php">HOME</a>
            <a href="./products.php">Products</a>
            <a href="./admin.php">Admin</a>
            <a href="./signup.php">Create Account</a>
        </navbar>


        <!-- SLIDER -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/S3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>DK MUSICS</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/S1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>DK MUSICS</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/S2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>DK MUSICS</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br>

        <div class="text-center">
            <p><del>1 MOIS GRATUIT</del></p>
            <h1 class="display-5"><b>4 MOIS GRATUITS</b></h1>
            <p><b>Offre à durée limitée.</b></p>
            <h2>
                <button class="btn btn-warning">Commencez votre essai gratuit de 4 mois</button>

            </h2>
            <p>Puis 9,99€ par mois. Offre réservée aux membres DK musics. Offre réservée aux nouveaux abonnés. Voir conditions.</p>
        </div>

        <div class="item">
            <h1> MAINTENANT EN HD SANS FRAIS SUPPLÉMENTAIRES </h1>
            <div class="flex-d">
                <figure><img src="./images/i1.png" alt="">
                    <p>MUSIQUE À LA DEMANDE</p>
                </figure>
                <figure><img src="./images/i2.png" alt="">
                    <p>VOS CHANSONS PRÉFÉRÉES</p>
                </figure>
                <figure><img src="./images/i3.png" alt="">
                    <p>MODE HORS CONNEXION</p>
                </figure>
                <figure><img src="./images/i4.png" alt="">
                    <p>ÉCOUTE MAINS LIBRES</p>
                </figure>
            </div>


        </div>



        <!-- part-4 -->
        <div class="flex-v">
            <div class="left">
                <h2>DÉCOUVRIR par album</h2>
                <p>Voir plus</p>
            </div>
            <div class="right">
                <h2>DÉCOUVRIR par artiste</h2>
                <p>Voir plus</p </div>
            </div>
        </div>

        <!-- part-5 -->

        <div class="text-center p-5">
            <h1>Thanks for listening. Now join in.</h1>
            <p>Save tracks, follow artists and build playlists. All for free.</p>
            <button class="btn btn-primary">Create account</button>
        </div>

    </div>


    <?php
    include_once('footer.php');
    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>