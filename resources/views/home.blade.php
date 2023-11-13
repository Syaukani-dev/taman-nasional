<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Taman Nasional Gunung Merapi</title>
    <link rel="stylesheet" href="/frontend/libraries/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/frontend/styles/main.css" />
    <link rel="icon" href="/frontend/images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <ul class="navbar-nav p-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Hello, Selamat Datang 👋</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nama" href="#">{{ Auth::user()->name }}</a>
                </li>
            </ul>
            <ul class="profile">
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-logout">Logout</button>
                    </form>
                </li>
                <li class="justify-content-center d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="/frontend/images/profile.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top mt-2" />
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="container scan-container">
            <div class="row row-1">
                <div class="col-12 p-sm-5 pb-sm-0 p-lg-5 p-md-5 pb-md-1 p-4 pb-0">
                    <h1 class="mb-3">Aplikasi Objek Wisata Tlogo Muncar</h1>
                    <p>
                        Aplikasi ini merupakan aplikasi yang berfungsi untuk memberikan
                        informasi seputar objek wisata Tlogo Muncar.
                    </p>
                </div>
            </div>
            <div class="row row-2">
                <div class="col-12 align-items-center d-flex justify-content-center">
                    <a href="{{ route('scan') }}" class="btn btn-scan">
                        Scan <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="row row-3">
                <div class="col-12 align-items-end d-flex justify-content-center">
                    <button class="btn btn-claim fw-bold">KLAIM HADIAH</button>
                </div>
            </div>
        </div>
    </header>
    <script src="/frontend/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>