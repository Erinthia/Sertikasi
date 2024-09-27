<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            color: #333;
        }

        .articles-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 50px auto;
            max-width: 700px;
        }

        .articles-section h2 {
            font-size: 2.5em;
            text-align: center;
            color: #bfb488;
            margin-bottom: 20px;
            position: relative;
        }

        .articles-section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: #bfb488;
            margin: 10px auto 0;
        }

        .articles-section ul {
            list-style-type: none;
            padding-left: 0;
        }

        .articles-section ul li {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .articles-section ul li:hover {
            background-color: #e9ecef;
            transform: translateY(-2px);
        }

        .articles-section ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .articles-section ul li a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .articles-section h2 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>

    <div class="articles-section">
        <div class="container mt-5">
            <h2 class="text-center mb-4">Artikel</h2>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a
                                href="https://www.trac.astra.co.id/blog/tips/tips-berkendara-jarak-jauh-agar-tidak-mudah-lelah-dan-ngantuk/805"
                                class="text-decoration-none">Tips Keselamatan
                                Berkendara Jarak Jauh</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">5 Acara Motor Terbaik
                                yang Harus Anda Hadiri</a></li>
                        <li class="list-group-item"><a
                                href="https://hondabanten.com/en/berita/tips/tips-memilih-helm-yang-aman-dan-nyaman"
                                class="text-decoration-none">Panduan Memilih Helm
                                yang Tepat untuk Berkendara</a></li>
                        <li class="list-group-item"><a
                                href="https://astraotoshop.com/article/cara-merawat-mesin-motor-agar-tetap-halus"
                                class="text-decoration-none">Cara Merawat Sepeda
                                Motor agar Selalu Optimal</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Mengenal Jenis-jenis
                                Turing dan Manfaatnya</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Etika Berkendara di
                                Jalan Raya</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Tips Mempersiapkan
                                Turing Jarak Jauh</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Keuntungan Bergabung
                                dengan Club Motor</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
