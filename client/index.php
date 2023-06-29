<?php 
require_once '../config.php';
if(isset($_SESSION['login']) && $_SESSION['login']) {
    switch($_SESSION['user_type']) {
        case 'staff':
            header('location: ../staff');
            break;
        case 'admin':
            header('location: ../admin');
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
    <script src="../src/jquery/jquery.min.js"></script>
    <script src="../src/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="../src/fontawesome/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- custom styles -->
    <style>
    * {
        font-family: "Poppins", sans-serif;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
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
        <div class="col-3 text-end text-white d-flex align-items-center justify-content-end">
            <h6 class="mt-2">
                <?php echo $_SESSION['fullname'] ?>
            </h6>

            <div class="dropdown">
                <img src="../src/assets/profile-avatar.png" alt="" height="50px" style="cursor: pointer;"
                    class="rounded-circle hover" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item hover d-flex align-items-center justify-content-start gap-2"
                            href="#"><span class="material-symbols-outlined">person</span> Profile</a>
                    </li>
                    <li><a class="dropdown-item hover d-flex align-items-center justify-content-start gap-2"
                            href="../logout.php"><span class="material-symbols-outlined">logout</span> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div style="
        min-height: 80vh;
      " class="container-fluid p-4 text-center">
        <button class="btn btn-lg px-5 py-3 border-0 fw-bold rounded-0 col-4"
            style="background-image: linear-gradient(white, skyblue);">E-Services</button>


        <div class="row justify-content-center mt-4 gap-3">
            <a href="#" style="box-shadow: 1px 0px 5px 9px rgba(255,255,255,0.6) inset;"
                class="col border-0 btn col-md-3 p-4 text-center text-white bg-success">
                <img src="https://www.mnchamber.com/sites/default/files/inline-images/Voting%20icon%20square.jpg"
                    class="rounded-circle border" style="height: 150px; width: 150px;" alt="voters certificate"><br><br>
                <h4>Voters certificate</h4>
            </a>
            <a href="#" style="box-shadow: 1px 0px 5px 9px rgba(255,255,255,0.6) inset;"
                class="col border-0 btn col-md-3 p-4 text-center text-white bg-success ">
                <img src="https://rsso05.psa.gov.ph/sites/default/files/Philippine_Statistics_Authority.png"
                    class="rounded-circle border" style="height: 150px; width: 150px;" alt="voters certificate"><br><br>
                <h4>PSA</h4>
            </a>
        </div>
        <div class="row justify-content-center mt-4 gap-3">
            <a href="#" style="box-shadow: 1px 0px 5px 9px rgba(255,255,255,0.6) inset;"
                class="col border-0 btn col-md-3 p-4 text-center text-white bg-success">
                <img src="../src/assets/wedding.png"
                    class="rounded-circle border" style="height: 150px; width: 150px;" alt="voters certificate"><br><br>
                <h4>kasalang Bayan</h4>
            </a>
            <a href="#" style="box-shadow: 1px 0px 5px 9px rgba(255,255,255,0.6) inset;"
                class="col border-0 btn col-md-3 p-4 text-center text-white bg-success ">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTW_J19b71VOHsJ626yP3ldsurEJWwUX7BwZw&usqp=CAU"
                    class="rounded-circle border" style="height: 150px; width: 150px;" alt="voters certificate"><br><br>
                <h4>Burrial Assistance</h4>
            </a>
        </div>
    </div>
    <script>
    $(document).ready(function() {

    });
    </script>
</body>

</html>