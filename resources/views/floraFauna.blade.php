<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora dan Fauna Tlogo Muncar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/frontend/styles/style.css') }}">
</head>

<body class="container-xxl">
    <div class="container">
        <div class="header d-flex justify-content-center">
            <div class="header-content">
                <a href="{{ route('home') }}">
                    <img class="prev-btn" src=" {{ url('/frontend/images/Back.svg') }} ">
                </a>
                <div class="detail-title text-center">Flora dan Fauna</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <h1 class="title mb-4 mt-5">Flora dan Fauna Tlogo Muncar</h1>
            <div class="description row d-flex justify-content-center gap-2">
                <div class="fauna w-100">
                    <p class="text-center fw-bold" style="font-size: 20px;">Fauna</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <a href=" {{ route('monyet') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Monyet Ekor Panjang.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Monyet Ekor Panjang (Macaca Fascicularis)</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('celepuk') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Celepuk Reban.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Celepuk Reban (Otus Lempiji)</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('elang') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Elang Jawa.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Elang Jawa (Nisaetus bartelsi)</p>
                        </div>
                    </div>
                </div>
                <div class="flora w-100 mb-4 mt-4">
                    <p class="text-center fw-bold" style="font-size: 20px;">Flora</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <div class="text-center">
                            <a href="{{ route('tesek') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Tesek.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Tesek (Dodonaea viscosa)</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('puspa') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Puspa.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Puspa (Schima Wallichii)</p>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('pasang') }}">
                                <img class="px-0 py-1" src="{{ url('/frontend/images/Pasang.jpg') }}" alt="">
                            </a>
                            <p class="text-center">Pasang (Lithocarpus Indutus)</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('home') }}">
                <button class="home-btn">
                    <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
                </button>
            </a>
        </div>
    </div>
</body>

</html>