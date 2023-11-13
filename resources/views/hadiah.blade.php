<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monyet Ekor Panjang (Macaca Fascicularis)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/frontend/styles/style.css') }}">
</head>

<body class="container-md">
    <div class="container">
        <div class="header d-flex justify-content-center">
            <div class="header-content">
                <a href="{{ route('home') }}">
                    <img class="prev-btn" src=" {{ url('/frontend/images/Back.svg') }} ">
                </a>
                <div class="detail-title">Detail</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content" style="margin: 200px 0">
            <div class="row d-flex justify-content-center my-3 mx-0">
                <p class="text-center" style="font-weight: 700; font-size: 18px;">Kamu mendapatkan souvenir menarik!</p>
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Klaim hadiah.png') }}" alt="">
            </div>
        </div>
        <a href="{{ route('home') }}">
            <button class="home-btn">
                <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
            </button>
        </a>
    </div>
</body>

</html>