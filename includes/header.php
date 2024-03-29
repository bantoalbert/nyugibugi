<!DOCTYPE html>
<html lang="hu">

<head>
    <title>Nyugi Bugi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="shortcut icon" type="image/x-icon"></i>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <?php include ("megrendelessql.php") ?>
</head>

<body>
    <div class="header">
        <div class="bg">
            <img src="img/hatterkep.jpg" alt="">
        </div>
        <div class="cimke">
            <h1>Nyugi-Bugi</h1>
            <h3>Innentől átvesszük!</h3>
            <p class="kolt"><b>Költöztetés</b></p>
        </div>
        <div class="keppozi position-relative ">
            <img src="img/kamion.png" alt="kamion.png" class="kamion">
            <img src="img/dobozok.png" alt="dobozok" class="dobozok position-absolute">
        </div>
    </div>
    <nav class="szin navbar navbar-expand-lg justify-content-center align-items-center border border-white">
        <div class="container-fluid">
            <div>
                <a class="nav-brand" href="./"><img src="img/logo.png" class="meret" alt="nyugibugi"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#szolgaltatasaink">Szolgáltatásaink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#arak">Árak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="megrendelolap.php">Megrendelő lap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galéria</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>