<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/frontend/styles/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="header d-flex justify-content-center">
            <div class="header-content">
                <a href="index.html">
                    <img class="prev-btn" src=" {{ url('/frontend/images/Back.svg') }} ">
                </a>
                <div class="detail-title text-center">Scan</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-12 align-center" style="text-align: center;margin-bottom: 20px;">
                    <div style="width: 100%" id="reader"></div>
                </div>
            </div>
            <div id="result"></div>
            <div class="stamp-progress d-flex justify-content-evenly align-items-center">
                <div class="text-center row d-flex justify-content-center align-items-center">
                    <div class="stamp-container d-flex justify-content-center align-items-center">
                        <img src="{{ url('/frontend/images/Konservasi.svg') }}" alt="">
                    </div>
                    <div class="stamp-text">Konservasi</div>
                </div>
                <div class="text-center row d-flex justify-content-center align-items-center">
                    <div class="stamp-container d-flex justify-content-center align-items-center">
                        <img src="{{ url('/frontend/images/Flora dan Fauna.svg') }}" alt="">
                    </div>
                    <div class="stamp-text">Flora dan Fauna</div>
                </div>
                <div class="text-center row d-flex justify-content-center align-items-center">
                    <div class="stamp-container d-flex justify-content-center align-items-center">
                        <img src="{{ url('/frontend/images/Mitigasi.svg') }}" alt="">
                    </div>
                    <div class="stamp-text">Mitigasi</div>
                </div>
                <div class="text-center row d-flex justify-content-center align-items-center">
                    <div class="stamp-container d-flex justify-content-center align-items-center">
                        <img src="{{ url('/frontend/images/Sejarah.svg') }}" alt="">
                    </div>
                    <div class="stamp-text">Sejarah</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="{{ url('/frontend/scripts/script.js') }}"></script>
</body>

</html>