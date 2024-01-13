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
    <link rel="" href="img/site.webmanifest" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            /* font-family: "Russo One", sans-serif; */
            scroll-behavior: smooth;
            color: #212121;
        }

        .card {
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .daftar_menu {
            width: 100%;
            /* background-color: lightgreen; */
            display: flex;
            /* height: 100vh; */
            justify-content: center;
            align-items: center;
        }

        .daftar_menu .menu_item {
            width: 20%;
            margin: 10px;
            display: flex;
        }

        @media screen and (max-width: 1200px) {
            body {
                font-size: 10px;
            }

            .daftar_menu {
                width: 100%;
                /* background-color: lightgreen; */
                display: flex;
                /* height: 100vh; */
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }

            .daftar_menu .menu_item {
                width: 40%;
                /* margin: 10px; */
                display: flex;
                /* background-color: lightblue; */
            }
        }

        @media screen and (max-width: 767px) {
            body {
                font-size: 10px;
            }

            .menu_item {
                width: 10%;
            }
        }

        @media screen and (max-width: 500px) {
            body {
                font-size: 12px;
            }

            .daftar_menu {
                width: 100%;
                /* background-color: lightgreen; */
                display: flex;
                /* height: 100vh; */
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }

            .daftar_menu .menu_item {
                width: 40%;
                /* margin: 10px; */
                display: flex;
                /* background-color: lightblue; */
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="alert alert-warning mt-3 text-center">
            Selamat Datang Di Aplikasi MyQur'an <br>
            Aplikasi Sedang Dalam Tahap Pengembangan
        </div>

        <div class="daftar_menu">
            <div class="menu_item">
                <a href="daftar_surat.php" style="text-decoration: none; color: #212121;">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="img/quran_2914201.png" class="img-fluid" alt="">
                            <p class="card-text text-center">Baca Qur'an</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="menu_item">
                <a href="javascript:void(0)" onclick="lock()" style="text-decoration: none; color: #212121;">
                    <div class="card shadow-lg">
                        <div style="position: absolute; top: 0; right: 0; padding: 5px; display: flex; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="card-body">
                            <img src="img/quiz_3407038.png" class="img-fluid" alt="">
                            <p class="card-text text-center">Quiz</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="menu_item">
                <a href="daftar_surat.php?status='baca_tafsir'" style="text-decoration: none; color: #212121;">
                    <div class="card shadow-lg">
                        <!-- <div style="position: absolute; top: 0; right: 0; padding: 5px; display: flex; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-lock"></i>
                        </div> -->
                        <div class="card-body">
                            <img src="img/book_3145765.png" class="img-fluid" alt="">
                            <p class="card-text text-center">Baca Tafsir</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="menu_item">
                <a href="javascript:void(0)" onclick="lock()" style="text-decoration: none; color: #212121;">
                    <div class="card shadow-lg">
                        <div style="position: absolute; top: 0; right: 0; padding: 5px; display: flex; justify-content: center; align-items: center;">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="card-body">
                            <img src="img/ebook_7636916.png" class="img-fluid" alt="">
                            <p class="card-text text-center">Qur'an Audio</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer class="py-3 fixed-bottom text-center bg-light">
        <a href="https://abdulrahmanjaelani11.github.io/" class="text-dark text-decoration-none" target="_blank">
            <p>Hak Cipta © Abdurahman Jaelani</p>
        </a>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script>
        function lock() {
            Swal.fire({
                title: `Mohon maaf`,
                text: `Fitur masih dalam tahap pengembangan`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#6C757D',
                confirmButtonText: 'Ya',
                showConfirmButton: false,
                cancelButtonText: 'Tutup'
            })
        }
    </script>
</body>

</html>