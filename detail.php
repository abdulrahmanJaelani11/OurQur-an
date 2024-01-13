<?php $id = $_GET['id'] ?>
<?php $status = isset($_GET['status']) ? $_GET['status'] : '' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/sb-admin-2.min.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
    <link rel="manifest" href="img/site.webmanifest" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --primary-color: #985AF1;
            /* Variabel warna primer */
            --secondary-color: #6630e5;
            /* Variabel warna sekunder */
            --text-color: #333;
            /* Variabel warna teks */
        }

        body {
            /* font-family: "Russo One", sans-serif; */
            scroll-behavior: smooth;
            color: #212121;
        }

        .container.detail {
            margin-top: 7%;
            margin-bottom: 7%;
        }

        .fontAyat {
            display: none;
        }

        #text_detail {
            width: 70%;
            /* background-color: #6630e5; */
        }

        @media screen and (max-width: 1200px) {}

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 500px) {
            body {
                font-size: 12px;
            }

            #text_detail {
                width: 100%;
                text-align: justify;
            }

            .fontAyat {
                display: block;
            }

            .fontAyatImg {
                display: none;
            }

            .container.detail {
                margin: 25% 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg" style="background: linear-gradient(to right, var(--primary-color), var(--secondary-color));">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/qur'an-logo.png" width="50" alt="Qur'an" />
                <h2 class="d-inline text-light" style="line-height: 10px">OurQur'an</h2>
            </a>
            <button type="submit" name="kirim" class="btn btnCariAyat p-3">
                <i class="fab fa-searchengin"></i>
            </button>
        </div>
    </nav>

    <div class="container detail">
        <div class="row">
            <div class="col-12 my-3" style="padding: 0;">
                <div class="card" style="padding: 0;">
                    <div class="card-body">
                        <h3 class="font-weight-bold text-center my-3">Surat <span id="judul_surat"></span></h3>
                        <p class="text-center"><span id="revelation"></span> - <span id="arti"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="detail_surat"></div>
    </div>

    <footer class="py-3 fixed-bottom text-center bg-light">
        <a href="https://abdulrahmanjaelani11.github.io/" style="color: #985AF1;" class="text-decoration-none" target="_blank">
            <p>Hak Cipta © Abdurahman Jaelani</p>
        </a>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script>
        let id = `<?= $id ?>`
        let sts = `<?= $status ?>`
    </script>

    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/detail.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>