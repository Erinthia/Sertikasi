<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .contact-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-header {
            background-color: #bfb488;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }

        .contact-body {
            padding: 20px;
        }

        .contact-body p {
            font-size: 1.1rem;
            color: #333;
        }

        .contact-info {
            margin-bottom: 15px;
        }

        .contact-info strong {
            font-size: 1.2rem;
            color: #333;
        }

        .contact-info i {
            margin-right: 10px;
            color: #bfb488;
        }

        .btn-contact {
            background-color: #bfb488;
            color: white;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-contact:hover {
            background-color: #a49773;
            color: white;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 768px) {
            .contact-section {
                padding: 20px;
            }

            .contact-body p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="contact-section">
                    <div class="contact-header">
                        <h2>Kontak Kami</h2>
                    </div>
                    <div class="contact-body">
                        <div class="contact-info">
                            <i class="bi bi-geo-alt-fill"></i>
                            <strong>Alamat:</strong>
                            <p>Jl. Motor 123, Jakarta, Indonesia</p>
                        </div>
                        <div class="contact-info">
                            <i class="bi bi-telephone-fill"></i>
                            <strong>Telepon:</strong>
                            <p>+62 123 456 789</p>
                        </div>
                        <div class="contact-info">
                            <i class="bi bi-envelope-fill"></i>
                            <strong>Email:</strong>
                            <p>info@clubname.com</p>
                        </div>
                        <div class="contact-info">
                            <i class="bi bi-facebook"></i>
                            <strong>Facebook:</strong>
                            <p><a href="https://www.facebook.com/clubname" target="_blank">facebook.com/clubname</a></p>
                        </div>

                        <div class="contact-info">
                            <i class="bi bi-instagram"></i>
                            <strong>Instagram:</strong>
                            <p><a href="https://www.instagram.com/clubname" target="_blank">@clubname</a></p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="https://wa.me/qr/YJX65D2PQBQHE1" class="btn btn-contact">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
