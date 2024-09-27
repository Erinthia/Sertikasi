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
                        <h2 class="card-title mb-0">Tentang Kami</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="club-logo.jpg" alt="Logo Club" class="img-fluid rounded-circle"
                                style="max-width: 150px;">
                        </div>
                        <p class="lead">
                            <strong>Vandals</strong> Waktu tak pernah bisa diulang kembali. Begitu berlalu, dia hanya
                            akan menjadi kenangan yang tersisa di ingatan para pelakunya. Sutradara Jeff Nichols
                            mengisahkannya di film The Bikeriders (2023) yang naskahnya ia tulis sendiri. Film bergenre
                            drama kriminal bernuansa semidokumenter itu berkisah tentang kemunculan dan perkembangan
                            subkultur geng motor besar di Amerika Serikat era 1960-an. Kisah fiksi kelompok geng motor
                            besar, The Vandals, digambarkan lewat sudut pandang beberapa karakter utama dalam filmnya.
                            didirikan pada tahun 2010 oleh sekelompok penggemar motor yang
                            memiliki passion dalam berkendara dan petualangan. Club kami fokus pada promosi keselamatan
                            berkendara, penyelenggaraan acara amal, dan membangun komunitas pengendara motor yang saling
                            mendukung.
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
