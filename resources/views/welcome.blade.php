<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1 - PWF</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background-color: #1a1a1a;
            border: 1px solid #333333;
            border-radius: 12px;
            padding: 40px 50px;
            width: 600px;
            min-height: 180px;
        }

        .card h2 {
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .card p {
            color: #888888;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .btn {
            display: inline-block;
            padding: 8px 20px;
            background-color: #ffffff;
            color: #000000;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .btn:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Notesa Aldinasari</h2>
        <p>20230140173</p>
        <a href="#" class="btn">Modul Pertemuan 1</a>
    </div>
</body>
</html>
