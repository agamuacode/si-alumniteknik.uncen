<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title> @yield('title' ?? 'Sistem Informasi Pemuda Baptis Papua')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="shortcut icon" href="{{ asset('asset-visitor/img/icon.jpg') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Libraries Stylesheet -->
    <link href="asset-visitor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset-visitor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset-visitor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset-visitor/css/style.css" rel="stylesheet">
</head>

<body>








    <main class="">

        @yield('content')
    </main>









    {{-- <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">

            </div>
        </div>
    </div>
    <!-- Footer End --> --}}

    <!-- Copyright Start -->
    <div class="container-fluid copyright text-body py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-12 text-center text-white fw-deco mb-md-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Copyrigt <a href="/" class="text-white"> Sistem Informasi
                        Alumni Teknik Tingkat Fakultas dan Jurusan Universitas Cenderawasih</a>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#top" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset-visitor/lib/easing/easing.min.js"></script>
    <script src="asset-visitor/lib/waypoints/waypoints.min.js"></script>
    <script src="asset-visitor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="asset-visitor/lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="asset-visitor/js/main.js"></script>
</body>

</html>
