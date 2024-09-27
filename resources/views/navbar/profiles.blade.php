<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .card {
            border-radius: 15px;
        }

        .card-header {
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            background-color: #ffffff;
        }

        .rounded-circle {
            border: 3px solid #bfb488;
            padding: 5px;
        }

        .btn-outline-primary,
        .btn-outline-success,
        .btn-outline-info {
            border-width: 2px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #0069d9;
            color: white;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }

        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: white;
        }

        .lead {
            font-size: 1.1rem;
            color: #333;
        }

        hr {
            border: 1px solid #e9ecef;
        }

        /* Optional: Card shadow styling */
        .card.shadow-sm {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        /* Optional: Animation for buttons */
        .btn {
            transform: scale(1);
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h2 class="card-title mb-0">Profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="club-logo.jpg" alt="Logo Club" class="img-fluid rounded-circle"
                                style="max-width: 150px;">
                        </div>
                        <p class="lead">
                            <strong>Vandals</strong> Vandals adalah sebuah komunitas motor yang didirikan pada
                            tahun 2010. Kami mengumpulkan para penggemar motor dari berbagai latar belakang dengan
                            tujuan untuk membangun ikatan persaudaraan dan saling mendukung. Dengan visi untuk
                            menciptakan lingkungan berkendara yang aman dan menyenangkan, kami aktif mengadakan berbagai
                            acara, termasuk touring, pelatihan keselamatan berkendara, dan kegiatan amal. Dengan lebih
                            dari 500 anggota, kami terus tumbuh dan berkomitmen untuk memperluas jangkauan kami dalam
                            komunitas motor di seluruh Indonesia.

                            Kelebihan Perusahaan

                            Komunitas yang Solid: Dengan jaringan yang luas, kami menciptakan komunitas yang saling
                            mendukung, di mana setiap anggota merasa dihargai dan didengar.
                            Fokus pada Keselamatan: Kami memiliki komitmen yang kuat terhadap keselamatan berkendara,
                            menyediakan pelatihan dan edukasi secara berkala kepada anggota.
                            Aktivitas Beragam: Kami tidak hanya melakukan touring, tetapi juga berpartisipasi dalam
                            berbagai kegiatan sosial yang bermanfaat bagi masyarakat.
                            Akses ke Sumber Daya: Anggota kami mendapatkan akses ke informasi dan sumber daya berkendara
                            yang berguna, termasuk tips perawatan motor dan teknik berkendara yang aman.
                            Event yang Menarik: Kami menyelenggarakan event yang menarik dan beragam, menjadikan
                            pengalaman bergabung dengan kami menyenangkan dan bermanfaat.
                        </p>
                        <hr>
                        <div class="text-center">
                            <a href="{{ route('visimisi') }}" class="btn btn-outline-primary me-2">Visi dan
                                Misi</a>
                            <a href="{{ route('event') }}" class="btn btn-outline-primary me-2">Event Kami</a>
                            <a href="{{ route('galleries') }}"class="btn btn-outline-primary me-2">Galeri Foto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
