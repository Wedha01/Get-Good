<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <style>
            body {
                background-image: url('header-bg.jpg');
                background-size: cover;
                background-position: center; /* Keep the background fixed while scrolling */
                background-color: purple; /* Fallback color if the image is not available */
                color: black;
                margin: 0;
                padding: 0;
            }
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity for the fade effect */
                z-index: -1; /* Place the overlay behind other content */
            }
            h1 {
                text-align: center;
                margin-top: 30px;
            }
            table {
                width: 100%;
                margin: 20px auto;
                border-collapse: collapse;
                background-color: #1e1e1e;
                color: #ffffff;
                border: 1px solid #444;
            }
            table th, table td {
                padding: 12px;
                text-align: center;
                border: 1px solid #444;
            }
            table th {
                background-color: #292929;
            }
            table tr:hover {
                background-color: #383838;
            }
            .btn:hover {
                background-color: #e68900;
            }
            .hidden-table {
            display: none;
        }
        </style>
        <title>Karakter</title>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.png" height="200" alt="Getgood"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('character.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">EVENT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('character.page') }}">Karakter</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
            <!-- Masthead-->
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">GetGood</div>
                </div>
            </header>
        
        <h1>Karakter</h1>
        <div>
            @if(session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div>
            <table border="1">
                <tr>
                    <th>Image</th>
                    <th>Description</th>
                    <th>relic</th>
                    <th>2pcs</th>
                    <th>planetaryset</th>
                </tr>
                @foreach($c as $ca) <!-- database -->
                    <tr>
                        <td><img src="{{ asset($ca->file) }}" alt="img"></td>
                        <td>{{ $ca->description }}</td>
                        <td><img src="{{asset($ca->relic)}}" style="height: 70px; width: 70px;" alt="relic"></td>
                        <td><img src="{{asset($ca->relic2)}}" style="height: 70px; width: 70px;"alt="2pcs"></td>
                        <td><img src="{{asset($ca->planetaryset)}}" style="height: 70px; width: 70px;"alt="relic"></td>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <!-- Footer -->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; GetGood 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
    </html>
