
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Food & Beverage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ff9800; /* Ubah background menjadi warna oranye */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #ff9800;
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            background-color: #fff;
            border: 1px solid #f8bbd0;
            border-radius: 10px;
            padding: 15px;
            width: calc(33% - 20px);
            box-sizing: border-box;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .product img {
            max-width: 100%;
            border-radius: 10px;
        }
        .product h2 {
            font-size: 1.5em;
            margin: 10px 0;
            color: #ff9800;
        }
        .product p {
            color: #666;
        }
        .product-price {
            font-size: 1.2em;
            color: #ff9800;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Food & Beverage</h1>
        <div class="product-list">
            <!-- Product 1 -->
            <div class="product">
                <img src="https://au.ooni.com/cdn/shop/articles/20220211142645-margherita-9920.jpg?crop=center&height=800&v=1662539926&width=800" alt="Pizza Margherita">
                <h2>Pizza Margherita</h2>
                <p>Pizza klasik Italia dengan saus tomat, keju mozzarella, dan basil segar.</p>
                <div class="product-price">Rp150.000</div>
            </div>
            <!-- Product 2 -->
            <div class="product">
                <img src="https://thescranline.com/wp-content/uploads/2023/12/CHEESEBURGERS-S-07.jpg" alt="Burger Cheeseburger">
                <h2>Cheeseburger</h2>
                <p>Burger sapi segar dengan keju cheddar, selada, tomat, dan saus spesial.</p>
                <div class="product-price">Rp115.000</div>
            </div>
            <!-- Product 3 -->
            <div class="product">
                <img src="https://knifeandsoul.com/wp-content/uploads/2022/09/crunchy-roll-sushi-recipe-recipe-card.jpg" alt="Sushi Roll">
                <h2>Sushi Roll</h2>
                <p>Sushi roll dengan isian ikan salmon segar, alpukat, dan timun.</p>
                <div class="product-price">Rp175.000</div>
            </div>
            <!-- Product 4 -->
            <div class="product">
                <img src="https://thejoyfilledkitchen.com/wp-content/uploads/2021/05/DSC_0067-2-500x375.jpg?crop=1" alt="Smoothie">
                <h2>Berry Smoothie</h2>
                <p>Smoothie lezat dengan campuran beri segar, yogurt, dan madu.</p>
                <div class="product-price">Rp85.000</div>
            </div>
            <!-- Product 5 -->
            <div class="product">
                <img src="https://images.ctfassets.net/3vz37y2qhojh/4B2QkY3grTx5oigHJQou1f/a8326779160ea8024265a87c96923763/Olga_30MnSpgCarbonara_Hero-Horizontal-Olga-Ivanova-V3.jpg" alt="Pasta Carbonara">
                <h2>Pasta Carbonara</h2>
                <p>Pasta dengan saus krim telur, keju parmesan, dan pancetta crispy.</p>
                <div class="product-price">Rp140.000</div>
            </div>
            <!-- Product 6 -->
            <div class="product">
                <img src="https://www.allrecipes.com/thmb/Hqro0FNdnDEwDjrEoxhMfKdWfOY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/21667-easy-iced-coffee-ddmfs-4x3-0093-7becf3932bd64ed7b594d46c02d0889f.jpg" alt="Iced Coffee">
                <h2>Iced Coffee</h2>
                <p>Kopi dingin dengan es, susu, dan sedikit gula.</p>
                <div class="product-price">Rp60.000</div>
            </div>
        </div>
    </div>
</body>
</html>
