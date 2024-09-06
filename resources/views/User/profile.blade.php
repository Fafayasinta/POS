<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-box {
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 50%;
            background-color: #f9f9f9;
        }

        .profile-box table {
            width: 100%;
        }

        .profile-box th, .profile-box td {
            padding: 15px;
            text-align: left;
        }

        .profile-box th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Profil Pengguna</h1>
        <div class="profile-box">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $id }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $name }}</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

