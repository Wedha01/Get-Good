<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GET GOOD</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .masthead {
            position: relative;
            height: 100vh;
            min-height: 500px;
            background: url('header-bg1.jpg') no-repeat center center;
            background-size: cover;
        }

        .masthead::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .masthead .container {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            top: 50%;
            transform: translateY(-50%);
        }

        .masthead-subheading {
            font-size: 50px;
            font-weight: 700;
            text-transform: uppercase;
            animation: fadeInDown 1s ease-out;
        }

        .masthead-heading {
            font-size: 24px;
            font-weight: 300;
            margin: 20px 0;
            animation: fadeInUp 1s ease-out;
            color: #ffc107;
        }

        .masthead .btn {
            font-size: 18px;
            padding: 15px 30px;
            background-color: #ffc107;
            border: none;
            color: #000;
            text-transform: uppercase;
            font-weight: 700;
            animation: fadeInUp 1s ease-out 0.5s;
            animation-fill-mode: both;
        }
        .masthead .btn:hover {
            background-color: #e0a800;
            color: #fff;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table img {
            transition: transform 0.2s;
        }

        .table img:hover {
            transform: scale(1.1);
        }

        .thead-dark th {
            background-color: #343a40;
            color: white;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .img-thumbnail {
            border: 2px solid #343a40;
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{asset('assets/img/navbar-logo.png')}}" height="200" alt="Getgood" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href={{ route("characters.index") }}>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('characters.page') }}">Karakter</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">GetGood</div>
            <div class="masthead-heading">What's The Plan Today?</div>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">KARAKTER</h2>
            </div>
            <div class="row">
                @foreach ($c as $ca)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item -->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $ca->id }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset($ca->file) }}" style="margin-left: 135px;"  alt="Character Image" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $ca->name }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $ca->description }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; GetGood 2023</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/get_good.1/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals-->
    @foreach ($c as $ca)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $ca->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{asset('assets/img/close-icon.svg')}}" alt="Close" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body text-center">
                                <!-- Project details-->
                                <h2 class="text-uppercase">{{ $ca->description }}</h2>
                                <p class="item-intro text-muted">{{ $ca->description }}</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset($ca->banner) }}" alt="banner" />
                                <!-- Improved table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Relic</th>
                                                <th>Relic Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset($ca->relic) }}" alt="Relic Image" style="height: auto; width: 100px;" class="img-thumbnail"></td>
                                                <td>{{ $ca->relicdescription }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>2pcs</th>
                                                <th>Relic Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset($ca->relic2) }}" alt="2pcs Image" style="height: auto; width: 100px;" class="img-thumbnail"></td>
                                                <td>{{ $ca->relicdescription2pcs }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Planetary set</th>
                                                <th>Planetary Set Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset($ca->planetaryset) }}" alt="Planetary Set Image" style="height: 70px; width: auto;" class="img-thumbnail"></td>
                                                <td>{{ $ca->planetarysetdescription }}</td>
                                            </tr>
                                        </tbody>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Lightcone</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset($ca->lightcone) }}" alt="Lightcone Image" style="height: 70px; width: auto;" class="img-thumbnail"></td>
                                                <td>{{ $ca->lightconedescription }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End of Improved table -->
                                <p>{{ $ca->details }}</p>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i> Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @endforeach

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- SB Forms JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
