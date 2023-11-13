<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesek (Dodonaea viscosa)</title>
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
            <h1 class="title">Tesek (Dodonaea viscosa)</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Tesek.jpg') }}" alt="">
            </div>
            <p>Sobat Muncar, pernah dengar tentang Tesek? Konon, gagang tombak pusaka Kiai Baru Klintihing milik Ki Agng Mangir terbuat dari kayu Tesek yang dipercayai memiliki energi supranatural. Hingga kini, pohon Tesek tetap memiliki makna khusus bagi masyarakat Merapi, digunakan dalam upacara adat, diyakini menetralisir tanah, dan digunakan dalam pembuatan jimat, kerajinan, bahkan gagang keris.</p>
            <p>Tesek juga memiliki beragam manfaat dalam pengobatan tradisional seperti anti-jamur, anti-mikroba, pereda rasa sakit, dan banyak lagi. Tanaman ini tumbuh subur di Merapi dan di luar zona inti Taman Nasional Gunung Merapi, kamu bisa menemukannya di Stabelan Tlogolele, Mriyan, atau Balerante. Apa kamu pernah berinteraksi dengan pohon Tesek atau memiliki cerita menarik tentang manfaatnya? Share dengan kami!</p>
            <a href="{{ route('home') }}">
                <button class="home-btn">
                    <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
                </button>
            </a>
        </div>
    </div>
</body>

</html>