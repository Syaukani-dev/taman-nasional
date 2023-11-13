<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puspa (Schima Wallichii)</title>
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
        <div class="content">
            <h1 class="title">Puspa (Schima Wallichii)</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Puspa.jpg') }}" alt="">
            </div>
            <p>Namanya Puspa, tapi jangan sepelekan kekuatannya. Pohon Puspa, spesies khas pegunungan Jawa, memiliki ketahanan luar biasa. Dengan tinggi mencapai 47 meter dan diameter batang rata-rata 1,5 meter, pohon ini tahan terhadap api dan tetap berdiri tegak bahkan saat tersapu awan panas.</p>
            <p>Puspa sering ditanam untuk merestorasi lingkungan setelah erupsi Merapi tahun 2010. Saat puncak pembungaan, April hingga Juni, lereng Merapi akan bersemu merah keunguan oleh bunga-bunga Puspa yang jatuh melimpah, menciptakan pemandangan menakjubkan di pegunungan. </p>
            <p>Pohon Puspa bisa ditemukan di berbagai lokasi seperti Tlogolele, Babadan, Plawangan, Turgo, Tritis, Gunung Malang, Tegalmulyo, Mriyan, atau Wonodoyo.</p>
            <a href="{{ route('home') }}">
                <button class="home-btn">
                    <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
                </button>
            </a>
        </div>
    </div>
</body>

</html>