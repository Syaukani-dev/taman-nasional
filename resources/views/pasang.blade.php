<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasang (Lithocarpus Indutus)</title>
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
            <h1 class="title">Pasang (Lithocarpus Indutus)</h1>
            <div class="row d-flex justify-content-center my-3 mx-0">
                <img class="col-md-6 px-0" src="{{ url('/frontend/images/Pasang.jpg') }}" alt="">
            </div>
            <p>Ingat si tupai malang di film Ice Age yang mengejar biji ek hingga ke pusat dunia? Ternyata, pohon ek dalam mitologi Yunani adalah lambang kekuatan dan panjang usia, mirip dengan bagaimana kita menghormati pohon beringin. Indonesia juga memiliki spesies ek, dikenal sebagai pohon pasang.</p>
            <p>Di Merapi, pohon pasang dianggap telah mencapai puncak pertumbuhannya, selalu berbunga dan berbuah hampir sepanjang tahun, dengan buahnya matang dari Agustus hingga November. </p>
            <p>Kayu pasang sangat diminati sebagai bahan mebel karena warnanya yang menarik dan kekerasannya yang tinggi, bahkan digunakan dalam pembuatan batang gerobak.</p>
            <p>Pohon pasang Indonesia tumbuh subur di Bukit Plawangan, serta di punggungan bukit Kemalang, Musuk, dan Cepogo. Pernah melihat pohon pasang Jawa atau menggunakan produk dari kayunya?</p>
            <a href="{{ route('home') }}">
                <button class="home-btn">
                    <img src="{{ url('/frontend/images/Home.svg') }}" alt="">
                </button>
            </a>
        </div>
    </div>
</body>

</html>