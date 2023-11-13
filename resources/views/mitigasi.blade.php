<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitigasi Bencana Tlogo Muncar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/frontend/styles/style.css') }}">
</head>

<body class="container-xxl">
    <div class="header d-flex justify-content-center">
        <div class="header-content">
            <a href="{{ route('home') }}">
                <img class="prev-btn" src=" {{ url('/frontend/images/Back.svg') }} ">
            </a>
            <div class="detail-title text-center">Mitigasi Bencana</div>
            <img src="{{ url('/frontend/images/Elipsis.svg') }}">
        </div>
    </div>
    <div class="divider"></div>
    <div class="content">
        <h1 class="title">Mitigasi Bencana</h1>
        <div class="row d-flex justify-content-center my-2 mx-0">
            <img class="col-6 pe-2 ps-0 py-1" src="{{ url('/frontend/images/Erupsi Gunung Merapi.jpg') }}" alt="">
            <img class="col-6 pe-0 py-1" src="{{ url('/frontend/images/Erupsi Gunung Merapi 2.jpg') }}" alt="">
        </div>
        <div class="description">
            <ul>
                <li>
                    Tlogo Muncar, yang terletak di kawasan Taman Nasional Gunung Merapi, memiliki tingkat risiko tinggi akibat aktivitas Gunung Merapi yang sering mengalami letusan baik dari skala kecil hingga erupsi dengan skala besar.
                </li>
                <li>
                    Ancaman di Tlogo Muncar meliputi:
                    <ul>
                        <li>
                            Awan panas
                        </li>
                        <li>
                            Aliran lava
                        </li>
                        <li>
                            Gas beracun
                        </li>
                        <li>
                            Lontaran material
                        </li>
                        <li>
                            Hujan abu
                        </li>
                        <li>
                            Lahar Letusan
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="row d-flex justify-content-center my-2 mx-0">
                <img class="col-md-6 px-0 py-1" src="{{ url('/frontend/images/Peta Evakuasi dan Daerah Rawan Bencana.jpg') }}" alt="">
            </div>
            <ul>
                <li>
                    Langkah-langkah mitigasi sebelum terjadi letusan (pra-bencana):
                    <ul>
                        <li>
                            Memantau peringatan dini dari Pusat Vulkanologi dan Mitigasi Bencana Geologi (PVMBG)
                        </li>
                        <li>
                            Menyiapkan masker dan kacamata pelindung
                        </li>
                        <li>
                            Mengetahui rute evakuasi
                        </li>
                        <li>
                            Mempersiapkan logistik
                        </li>
                    </ul>
                </li>
                <li>
                    Saat bencana, pastikan bahwa:
                    <ul>
                        <li>
                            Anda berada di tempat aman
                        </li>
                        <li>
                            Menggunakan pelindung
                        </li>
                        <li>
                            Patuhi petunjuk berwenang
                        </li>
                    </ul>
                </li>
                <li>
                    Setelah bencana, pastikan kebutuhan dasar terpenuhi dan terus pantau informasi terbaru
                </li>
            </ul>
            <div class="row d-flex justify-content-center my-2 mx-0">
                <img class="col-md-6 px-0 py-1" src="{{ url('/frontend/images/Status dan Cara Menghadapi Bahaya Gunung Merapi.png') }}" alt="">
            </div>
            <ul>
                <li>
                    Ada 4 tingkat peringatan dini:
                    <ul>
                        <li>
                            Aktif normal
                        </li>
                        <li>
                            Waspada
                        </li>
                        <li>
                            Siaga
                        </li>
                        <li>
                            Awas
                        </li>
                    </ul>
                </li>
                <li>
                    Setiap tingkatan terdapat panduan tindakan yang perlu dilakukan sesuai tingkat risiko erupsi Gunung Merapi.
                </li>
            </ul>

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