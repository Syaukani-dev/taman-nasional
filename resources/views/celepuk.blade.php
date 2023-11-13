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
                <div class="detail-title text-center">Detail</div>
                <img src="{{ url('/frontend/images/Elipsis.svg') }}">
            </div>
        </div>
        <div class="divider"></div>
        <div class="content">
            <h1 class="title">Celepuk Reban (Otus Lempiji)</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Celepuk Reban.jpg') }}" alt="">
            </div>
            <p>Celepuk Reban, sejenis burung hantu bermata bundar yang sering disebut "manuk guwek," memiliki kemampuan memangsa mangsanya seperti ngengat, belalang, kodok, dan burung kecil meskipun ukurannya kecil.</p>
            <p>Mereka sering ditemukan di lubang pohon, pelepah kelapa, dan rumpun bambu di dekat pemukiman warga.</p>
            <p>Celepuk Reban berkembang biak dengan meletakkan 2-3 telur dalam satu kali bertelur selama musim penghujan, dan biasanya ditemukan di lereng pegunungan hingga ketinggian 1.600 mdpl di kawasan Merapi.</p>
            <button class="home-btn">
                <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
            </button>
        </div>
    </div>
</body>

</html>