<?php 
require_once '../config.php';
if(isset($_SESSION['login']) && $_SESSION['login']) {
    switch($_SESSION['user_type']) {
        case 'staff':
            header('location: ../staff');
            break;
        case 'client':
            header('location: ../client');
            break;
    }
} else header('location: ../');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Municipality of Rizal</title>
    <link rel="icon" href="../src/assets/logo.png" type="image/x-icon" />

    <!-- Jquery -->
    <script src="../src/jquery/jquery.min.js"></script>

    <!-- sweet alert -->
    <script src="../src/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- w3JS -->
    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <!-- fotn-awesome -->
    <link rel="stylesheet" href="../src/fontawesome/css/all.min.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- custom styles -->
    <style>
    * {
        font-family: "Poppins", sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        transition: all 0.5s;
    }

    body::-webkit-scrollbar {
        width: 0;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end py-3 px-2" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active d-flex align-items-center justify-content-start gap-2 text-success mx-3"
                        href="./">
                        <span class="material-symbols-outlined">home</span> Home</a>
                    <a class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
                        href="#">
                        <span class="material-symbols-outlined">campaign</span>
                        Announcement</a>
                    <a class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
                        href="#">
                        <span class="material-symbols-outlined">call</span> Contact</a>
                    <a class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
                        href="./about.php">
                        <span class="material-symbols-outlined">info</span> About us</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center justify-content-between p-3 bg-success position-relative">
        <div class="col-4 d-flex align-items-center justify-content-start gap-3 text-white" style="height: 48px;">
            <img src="../src/assets/logo.png" width="120px" height="120px" class="rounded-circle"
                style="position: absolute; left: 0; z-index: 10" />
            <h1 class="fw-bold fs-2 mt-1" style="margin-left: 7rem">
                MUNICIPALITY OF RIZAL
            </h1>
        </div>
        <div class="col-3 text-end d-none d-md-block">
            
        </div>
    </div>

    <div style="
        min-height: 80vh;
        background: url(../src/assets/bg-placeholder.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        filter: brightness(90%);
      " class="w-full d-flex align-items-center justify-content-center position-relative">
        <h1 class="text-center p-5 text-white text-shadow box-shadow" style="background: rgba(0, 0, 0, 0.3)">
            I-RIZ: E-Services Management Information System for the Municipality of
            Rizal
        </h1>
    </div>
    <script>
    $(document).ready(function() {
        
    });
    </script>
</body>

</html>