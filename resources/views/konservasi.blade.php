<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celepuk Reban (Otus Lempiji)</title>
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
                <div class="detail-title text-center">Konservasi</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <h1 class="title">Konservasi Tlogo Muncar</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0 py-1" src="{{ url('/frontend/images/konservasi.jpg') }}" alt="">
            </div>
            <div class="description">
                <p>Apakah kalian pernah mendengar istilah konservasi?</p>
                <p>Konservasi adalah upaya yang dilakukan manusia untuk melestarikan atau melindungi alam yang
                    dilakukan secara teratur. Kegiatan konservasi selalu berhubungan dengan suatu kawasan, kawasan
                    itu sendiri mempunyai pengertian yakni wilayah dengan fungsi utama lindung atau budidaya
                    (Undang-undang No. 32 Tahun 2009).</p>
                <p>Nah apabila tidak ada konservasi alam di Tlogo Muncar, ada beberapa dampak yang dapat terjadi!</p>
                <ol>
                    <li>
                        Kerusakan habitat yang dapat menyebabkan spesies tumbuhan dan hewan yang unik dan langka menjadi
                        terancam punah.
                    </li>
                    <li>
                        Pemanasan global dan perubahan iklim
                    </li>
                    <li>
                        Kerentanan terhadap bencana alam, seperti banjir dan tanah longsor.
                    </li>
                    <li>
                        Ketidakseimbangan ekosistem
                    </li>
                </ol>
                Oleh sebab itu, Sobat Muncar dapat turut melakukan kegiatan konservasi dengan :
                <ol>
                    <li>
                        Tidak membuang sampah sembarangan
                    </li>
                    <li>
                        Tidak merusak vegetasi (tumbuhan, termasuk pohon, semak, dan tanaman lainnya yang ada di tlogo
                        muncar)
                    </li>
                    <li>
                        Tidak mengganggu satwa liar, terutama monyet yang ada di kawasan tlogo muncar.
                    </li>
                    <li>
                        Menggunakan fasilitas dengan baik
                    </li>
                    <li>
                        Menghormati peraturan dan petunjuk yang ada
                    </li>
                </ol>
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