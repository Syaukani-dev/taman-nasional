<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Taman Nasional Gunung Merapi</title>
    <link rel="stylesheet" href="/frontend/libraries/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/frontend/styles/main.css" />
    <link rel="icon" href="/frontend/images/logo.png" />
</head>

<body>
    <header class="login-wrapper">
        <div class="container-fluid">
            <div class="row row-1">
                <div class="col text-end">
                    <img src="/frontend/images/vector-atas.png" alt="taman-nasional" class="vector-atas" />
                </div>
            </div>
            <div class="row justify-content-center konten row-2">
                <div class="col-lg-6 col-md-12 text-center align-items-center d-flex justify-content-center">
                    <ul>
                        <li>
                            <img src="/frontend/images/logo.png" alt="taman nasional" />
                        </li>
                        <li>
                            <p class="fw-bold mt-2">Selamat Datang Di</p>
                        </li>
                        <li>
                            <h1 class="fw-bold">TLOGO MUNCAR</h1>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 align-items-center d-flex justify-content-center">
                    <form action="{{ route('login') }}" method="POST" class="d-flex justify-content-center">
                        @csrf
                        <ul>
                            <li>
                                <label for="name" class="fw-bold">{{ __('Name') }}</label>
                            </li>
                            <li>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </li>
                            @error('name')
                            <li>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            </li>
                            @enderror
                            <li>
                                <label for="password" class="fw-bold mt-3">Password</label>
                            </li>
                            <li>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-4" name="password" required autocomplete="current-password">
                            </li>
                            @error('password')
                            <li>
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            </li>
                            @enderror
                            <li>
                                <button type="submit" class="btn btn-primary fw-bold">
                                    {{ __('Login') }}
                                </button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="row row-3">
                <div class="col d-flex align-items-end">
                    <img src="/frontend/images/vector-bawah.png" alt="taman-nasional" class="vector-bawah" />
                </div>
            </div>
        </div>
    </header>
    <script src="/frontend/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>