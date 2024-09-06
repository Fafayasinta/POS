<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Baby & Kid</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(135deg, #f8bbd0, #bbdefb); /* pink to blue gradient */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #ff4081;
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 2px solid #ff80ab;
            border-radius: 15px;
            padding: 15px;
            width: calc(33% - 20px);
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }
        .product img {
            max-width: 100%;
            border-radius: 15px;
        }
        .product h2 {
            font-size: 1.6em;
            margin: 10px 0;
            color: #ff4081;
        }
        .product p {
            color: #666;
        }
        .product-price {
            font-size: 1.3em;
            color: #ff4081;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Baby & Kid</h1>
        <div class="product-list">
            <!-- Product 1 -->
            <div class="product">
                <img src="https://m.media-amazon.com/images/I/710NV9nlCYL._SL1500_.jpg" alt="Cute Baby Rattle">
                <h2>Cute Baby Rattle</h2>
                <p>Goyang bayi berwarna cerah yang aman dan menyenangkan untuk bayi.</p>
                <div class="product-price">Rp.900000</div>
            </div>
            <!-- Product 2 -->
            <div class="product">
                <img src="https://www.plushieland.co.uk/cdn/shop/products/S429c5b4ff63a478e8859ca253b5dcc80p_1024x1024.jpg?v=1681512158" alt="Soft Stuffed Toy">
                <h2>Soft Stuffed Toy</h2>
                <p>Mainan boneka lembut yang nyaman dan aman untuk anak kecil.</p>
                <div class="product-price">Rp.400000</div>
            </div>
            <!-- Product 3 -->
            <div class="product">
                <img src="https://images-cdn.ubuy.co.id/6698e6d4701ca07e891d3a40-momcozy-baby-hooded-towel-8-piece-bath.jpg" alt="Baby Bath Towel">
                <h2>Baby Bath Towel</h2>
                <p>Handuk mandi bayi dengan bahan lembut dan desain lucu.</p>
                <div class="product-price">Rp.400000</div>
            </div>
            <!-- Product 4 -->
            <div class="product">
                <img src="https://m.media-amazon.com/images/I/81d5Jjn6MKL._AC_SX679_.jpg" alt="Colorful Playmat">
                <h2>Colorful Playmat</h2>
                <p>Matras bermain berwarna-warni yang nyaman dan aman untuk bayi.</p>
                <div class="product-price">Rp.300000</div>
            </div>
            <!-- Product 5 -->
            <div class="product">
                <img src="https://safeokid.com/wp-content/uploads/2024/02/71Mno5W1wKL._AC_SL1500_.jpg" alt="Kids Safety Gate">
                <h2>Kids Safety Gate</h2>
                <p>Pintu pengaman anak untuk menjaga keselamatan di rumah.</p>
                <div class="product-price">Rp.750000</div>
            </div>
            <!-- Product 6 -->
            <div class="product">
                <img src="https://down-id.img.susercontent.com/file/bad42b6791ce7972e322c3f1e95e3090" alt="Baby Feeding Set">
                <h2>Baby Feeding Set</h2>
                <p>Set makan bayi dengan desain ceria dan bahan yang aman.</p>
                <div class="product-price">Rp.500000</div>
            </div>
        </div>
    </div>
</body>
</html>

