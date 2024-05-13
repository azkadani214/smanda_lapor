<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
        }

        .container {
            text-align: center;
        }

        .container img {
            max-width: 100%;
            height: auto;
        }

        .message {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }

        .btn-home {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #3490dc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            /* Tambahkan agar tampilan menjadi seperti tombol */
        }

        .btn-home:hover {
            background-color: #2779bd;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="/"><img src="{{ asset('img/404laptop.jpg') }}" alt="404 Error"></a>
    </div>
</body>

</html>
