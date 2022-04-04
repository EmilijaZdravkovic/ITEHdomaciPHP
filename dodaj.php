<?php
include "Baza.php";
$db = new Baza();
$poruka = "";

if(isset($_POST['dodaj'])){
    $naziv = trim($_POST['naziv']);
    $autor = trim($_POST['autor']);
    $zanr = trim($_POST['zanr']);
    $ocena = trim($_POST['ocena']);
    $procitano = trim($_POST['procitano']);


    if($db->sacuvaj($naziv, $autor, $zanr, $ocena, $procitano)){
        $poruka = "Uspesno sacuvana knjiga";
    }else{
        $poruka = "Neuspesno sacuvana knjiga";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moja biblioteka</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div>


    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0381656661266"><i class="fa fa-phone-alt text-primary me-2"></i>+0381 65 666 1266</a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>me@moja-biblioteka.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Moja Biblioteka</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="dodaj.php" class="nav-item nav-link">Dodaj knjigu</a>
                <a href="izmeni.php" class="nav-item nav-link">Izmeni ocenu knjige</a>
                <a href="obrisi.php" class="nav-item nav-link">Obrisi knjigu</a>
            </div>
        </div>
    </nav>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Moja biblioteka</h4>
                <h3 class="text-primary"><?= $poruka; ?></h3>
            </div>
            <div class="row">
                <form method="post" action="">
                    <label for="naziv">Naziv</label>
                    <input type="text" id="naziv" name="naziv" class="form-control">
                    <label for="autor">Autor</label>
                    <input type="text" id="autor" name="autor" class="form-control">
                    <label for="zanr">Zanr</label>
                    <select id="zanr" name="zanr" class="form-control">

                    </select>

                    <label for="ocena">Ocena</label>
                    <input type="number" id="ocena" name="ocena" class="form-control">
                    <label for="procitano">Procitano</label>
                    <select id="procitano" name="procitano" class="form-control">
                        <option value="1">Da </option>
                        <option value="0">Ne </option>
                    </select>
                    <hr/>
                    <button type="submit" name="dodaj">Unesi knjugu</button>

                </form>
            </div>
            <br/>
            <br/>

        </div>
    </div>

    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">

        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Moja Biblioteka</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                    "Ne znam nijedan problem koji sat vremena čitanja nije ublažio."
                    </div>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        function popuniKomboZanrova() {

            $.ajax({
                url: 'zanrovi.php',
                success: function (data) {
                   $("#zanr").html(data);
                }
            });
        }
        popuniKomboZanrova();
    </script>

</body>

</html>