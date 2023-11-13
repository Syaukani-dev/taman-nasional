<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elang Jawa (Nisaetus bartelsi)</title>
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
            <h1 class="title">Elang Jawa (Nisaetus bartelsi)</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Elang Jawa.jpg') }}" alt="">
            </div>
            <p>Pernahkah kamu tahu bahwa Elang Jawa adalah lambang negara Indonesia dan menjadi maskot satwa langka sejak 1992? Namun, sayangnya, jumlah mereka semakin langka di alam liar, bahkan masuk dalam daftar merah IUCN sebagai spesies yang terancam punah.</p>
            <p>Kamu mungkin penasaran di mana kamu bisa menemukan Elang Jawa, bukan? Mereka biasanya hidup di lereng berhutan pegunungan Jawa, dan ketinggian bisa mencapai 3.000 mdpl. Namun, tantangan terbesar bagi keberadaan mereka adalah hilangnya hutan primer akibat invasi manusia.</p>
            <p>Dalam kawasan taman nasional, kamu mungkin beruntung melihat mereka terbang berputar di lereng selatan hingga timur Merapi saat mereka sedang berbiak antara bulan Januari hingga Juni. Apakah kamu pernah mendengar atau melihat Elang Jawa di alam liar?</p>
            <a href="{{ route('home') }}">
                <button class="home-btn">
                    <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
                </button>
            </a>
        </div>
    </div>
</body>

</html>