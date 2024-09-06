<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi Point of Sales</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            padding: 15px;
            text-align: center;
        }
        .table thead {
            background-color: #ddd;
            color: #black;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .title {
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            color: #333;
        }
        .total-row {
            font-weight: bold;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Halaman Transaksi Point of Sales</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Face mask</td>
                    <td>1</td>
                    <td>Rp 240.000</td>
                </tr>
                <tr>
                    <td>Satin pillow</td>
                    <td>1</td>
                    <td>Rp 900.000</td>
                </tr>
                <tr>
                    <td>Ice coffe</td>
                    <td>1</td>
                    <td>Rp 60.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="2" class="text-right">Total Harga:</td>
                    <td>Rp 1.200.000</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

