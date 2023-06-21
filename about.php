<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us | Municipality of Rizal</title>
    <link rel="icon" href="./src/assets/logo.png" type="image/x-icon" />

    <!-- Jquery -->
    <script src="./src/jquery/jquery.min.js"></script>

    <!-- sweet alert -->
    <script src="./src/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- axios -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
      integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- fotn-awesome -->
    <link rel="stylesheet" href="./src/fontawesome/css/all.min.css" />

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />

    <!-- google icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />

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
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end py-3 px-2"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a
              class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="/"
            >
              <span class="material-symbols-outlined">home</span> Home</a
            >
            <a
              class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="#"
            >
              <span class="material-symbols-outlined">campaign</span>
              Announcement</a
            >
            <a
              class="nav-link d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="#"
            >
              <span class="material-symbols-outlined">call</span> Contact</a
            >
            <a
              class="nav-link active d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="./about.php"
            >
              <span class="material-symbols-outlined">info</span> About us</a
            >
            
            <a
              class="nav-link d-md-none d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="#"
            >
              <span class="material-symbols-outlined">login</span> Login</a
            >
            <a
              class="nav-link d-md-none d-flex align-items-center justify-content-start gap-2 text-success mx-3"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#register"
            >
              <span class="material-symbols-outlined">add</span> Register</a
            >
          </div>
        </div>
      </div>
    </nav>
    <div
      class="d-flex align-items-center justify-content-between p-3 bg-success position-relative"
    >
      <div
        class="col-4 d-flex align-items-center justify-content-start gap-3 text-white"
        style="height: 48px;"
      >
        <img
          src="./src/assets/logo.png"
          width="120px"
          height="120px"
          class="rounded-circle"
          style="position: absolute; left: 0; z-index: 10"
        />
        <h1 class="fw-bold fs-2 mt-1" style="margin-left: 7rem">
          MUNICIPALITY OF RIZAL
        </h1>
      </div>
      <div class="col-3 text-end d-none d-md-block">
        <a href="#" class="btn btn-trnasparent text-white btn-sm px-3">Login</a>
        <a
          href="javascript:void(0)"
          data-bs-toggle="modal"
          data-bs-target="#register"
          class="btn btn-light btn-sm px-4"
          >Register</a
        >
      </div>
    </div>

    <div
      style="min-height: 80vh;"
      class="w-full"
    >
    <div class="container-fluid">
      <div class="container p-5">
        <button class="btn btn-success rounded-0 px-5">MISSION</button>
        <div class="container-fluid rounded border boder-2 border-success p-4">
          <p>To provide an enabling environment for the development of agriculture and eco-tourism industry through responsive and efficient governance, empowered communities and sustainable management of natural resources towards a peacful, progressive and resilient municipality</p>
        </div>
      </div>
      <div class="container py-2 p-5">
        <button class="btn btn-success rounded-0 px-5">VISSION</button>
        <div class="container-fluid rounded border boder-2 border-success p-4">
          <p>A model of agricultural and eco-toursim-based economy that is sustainable, peaceful, and progressive with empowered and resilient communities living in a vibrant natural environment</p>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <form
      method="POST"
      action="javascript:void(0)"
      class="modal fade"
      id="register"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content rounded-0 border border-5 border-success">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="staticBackdropLabel">
              REGISTRATION FORM
            </h1>
            <button
              type="reset"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- message container -->
            <div id="msg_container"></div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="">Full Name:</label>
                  <input
                    required
                    type="text"
                    class="form-control form-control-md"
                    name="fullname"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Contact Number:</label>
                  <input
                    required
                    type="text"
                    class="form-control form-control-md"
                    name="contact_no"
                    pattern="\d{11}" 
                    title="Please enter a 11-digit cellphone number"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Gender:</label>
                  <select required name="gender" class="form-select">
                    <option disabled selected class="d-none"></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="">Email:</label>
                  <input
                    required
                    type="email"
                    class="form-control form-control-md"
                    name="email"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Address:</label>
                  <input
                    required
                    type="address"
                    class="form-control form-control-md"
                    name="address"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Age:</label>
                  <input
                    required
                    type="number"
                    class="form-control form-control-md"
                    name="age"
                  />
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="">Password:</label>
                  <input
                    required
                    type="password"
                    class="form-control form-control-md"
                    name="password"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Birthday:</label>
                  <input
                    required
                    type="date"
                    class="form-control form-control-md"
                    name="birthday"
                  />
                </div>
                <div class="form-group mt-2">
                  <label for="">Status:</label>
                  <select required name="status" class="form-select">
                    <option disabled selected class="d-none"></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger btn_cancel" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="submit" class="btn btn-success btn_submit">
              Submit
            </button>
          </div>
        </div>
      </div>
    </form>

    <script>
      $(document).ready(function () {
        const abortController = new AbortController();
        $(".btn_cancel").on("click", function () {
          abortController.abort();
          setTimeout(function() {
            location.reload();
          }, 1000);
        });

        $("#register").on("submit", function (ev) {
          ev.preventDefault();
          const data = $(this).serialize();
          btnTrigger(
            ".btn_submit",
            true,
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please wait..'
          );

          const signal = abortController.signal;
          axios
            .post("./handle_register.php", data, { signal })
            .then(function (res) {
              btnTrigger(".btn_submit", false, "Submit");
              $("#msg_container").html(res.data);
              if(res.data == '') {
                Swal.fire(
                  "Congratulations!",
                  "You have successfully registered",
                  "success"
                );
              }
            })
            .catch(function (error) {
              if (error.name === "AbortError") {
                btnTrigger(".btn_submit", false, "Submit");
                $("#msg_container").html(error);
                Swal.fire(
                  "The action you initiated has been revoked!",
                  "",
                  "success"
                );
              } else {
                btnTrigger(".btn_submit", false, "Submit");
                Swal.fire("Something went wrong!", "please try again", "error");
              }
            });
        });

        function btnTrigger(s, disabled, str) {
          $(s).html(str);
          $(s).prop("disabled", disabled);
        }
      });
    </script>
  </body>
</html>
