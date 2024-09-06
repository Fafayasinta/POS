<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .menu-buttons {
            margin-top: 50px;
        }
        .menu-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .menu-buttons .btn {
            width: 200px;
            height: 100px;
            font-size: 18px;
            margin: 10px;
            color: black; /* Font color set to black */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .btn-food {
            background-color: orange;
        }
        .btn-beauty {
            background-color: pink;
        }
        .btn-home {
            background-color: silver;
        }
        .btn-baby {
            background-color: rgb(0, 200, 255);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="#">FAFA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user/1/name/Fardiyani Afroul Yasinta') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/penjualan') }}">Sales</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Point of Sale Menu -->
    <div class="container text-center menu-buttons">
        <h1>Point of Sale</h1>
        <h5>Selamat Datang</h5><br>

        <!-- Kotak Background untuk Menu -->
        <div class="menu-container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <a href="{{ url('/category/food-beverage') }}" class="btn btn-food">Food & Beverage</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/category/beauty-health') }}" class="btn btn-beauty">Beauty & Health</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/category/home-care') }}" class="btn btn-home">Home Care</a>
                </div>
                <div class="col-md-3">
                    <a href="{{ url('/category/baby-kid') }}" class="btn btn-baby">Baby & Kid</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
