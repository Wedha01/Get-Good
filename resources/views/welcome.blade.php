<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GetGood</title>

    <!-- Fonts -->
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .header-link {
            margin-left: 15px;
        }
    </style>
</head>
<body>
    </header>
    <main>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <img src="{{asset('#')}}" style="height: 150px;" alt="Your Image" class="img-fluid mb-4" />
                                    <h2 class="fw-bold mb-2 text-uppercase">Welcome</h2>
                                    <p class="text-white-50 mb-5">Welcome to Adipati Admin</p>
                                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-5">Log in</a>
                                </div>
                                <div>
                                    <p class="mb-0"><a href="{{ route('register') }}" class="text-white-50 fw-bold">Sign Up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-4 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start mb-2 mb-lg-0">
                <p class="mb-0">&copy; Study Hotel Eksekutif</p>
            </div>
            <div class="col-lg-4 my-3 my-lg-0 d-flex justify-content-center">
                <a class="btn btn-outline-light btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- FontAwesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>