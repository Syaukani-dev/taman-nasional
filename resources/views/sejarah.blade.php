<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Tlogo Muncar</title>
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
                <div class="detail-title text-center">Sejarah</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <h1 class="title">Sejarah Tlogo Muncar</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Tlogo Muncar.jpg') }}" alt="">
            </div>
            <p>Selamat datang di Tlogo Muncar, keindahan alam tersembunyi di Kabupaten Sleman, Kaliurang! Di sini, kita bisa benar-benar melepaskan penat dan menyatu dengan alam. Cari tahu fakta unik air terjun di Tlogo Muncar, yuk! </p>
            <p>Berikut fakta unik dari air terjun di Tlogo Muncar:</p>
            <ul>
                <li>Air terjun ini tingginya sekitar 40 meter di atas permukaan laut.</li>
                <li>Air yang mengalir di air terjun ini berasal dari kaki Gunung Merapi.</li>
                <li>Ada sejarahnya juga, lho! Konon, air terjun ini dulunya adalah tempat pemandian bangsawan dan Dewi Condrokirono pernah berkunjung ke sini. </li>
                <li>Pada masa Sri Sultan Hamengkubuwono VII, air terjun Tlogo Muncar digunakan untuk memandikan pusaka kerajaan dan acara ritual penting lainnya.</li>
            </ul>
            <p>Jika kamu mengunjungi Tlogo Muncar, kamu tak hanya akan terpesona oleh keindahan alamnya, tetapi juga akan terhubung dengan sejarah yang hidup di setiap air terjunnya. Jadi, jangan lewatkan kesempatan untuk merasakan pesona alam dan sejarah yang tersembunyi di sini!</p>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Penjelasan Sejarah Air Terjun di Tlogo Muncar.jpg') }}" alt="">
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