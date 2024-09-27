<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .vision-mission-section {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 50px auto;
            max-width: 800px;
        }

        .vision-mission-section h2 {
            font-size: 2.5em;
            text-align: center;
            color: #bfb488;
            margin-bottom: 20px;
        }

        .vision-mission-section h3 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .vision-mission-section h3::after {
            content: '';
            width: 60px;
            height: 3px;
            background-color: #bfb488;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .vision-mission-section p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .vision-mission-section ul {
            list-style: none;
            padding-left: 0;
        }

        .vision-mission-section ul li {
            font-size: 1.1em;
            color: #555;
            padding-left: 30px;
            position: relative;
            margin-bottom: 15px;
        }

        .vision-mission-section ul li::before {
            content: '✔';
            font-size: 1.2em;
            color: #bfb488;
            position: absolute;
            left: 0;
            top: 2px;
        }

        .vision-mission-section {
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .vision-mission-section {
                padding: 15px;
            }

            .vision-mission-section h2 {
                font-size: 2em;
            }

            .vision-mission-section h3 {
                font-size: 1.5em;
            }

            .vision-mission-section p,
            .vision-mission-section ul li {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>

    <div class="vision-mission-section">
        <h2>Visi dan Misi</h2>

        <h3>Visi</h3>
        <p>Menjadi club motor terdepan yang dikenal akan solidaritas, kegiatan amal, dan dedikasi terhadap
            keselamatan berkendara.</p>

        <h3>Misi</h3>
        <ul>
            <li>Menyelenggarakan acara yang meningkatkan persaudaraan antar pengendara motor.</li>
            <li>Memajukan keselamatan jalan dan berkendara yang bertanggung jawab.</li>
            <li>Mendukung kegiatan sosial melalui acara dan turing club.</li>
        </ul>
    </div>

</body>

</html>
