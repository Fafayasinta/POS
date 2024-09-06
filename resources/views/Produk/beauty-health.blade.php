<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk Beauty & Healthy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
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
            color: #ec407a;
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
            color: #ec407a;
        }
        .product p {
            color: #666;
        }
        .product-price {
            font-size: 1.2em;
            color: #d81b60;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Beauty & Healthy</h1>
        <div class="product-list">
            <!-- Product 1 -->
            <div class="product">
                <img src="https://ng.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/18/9910032/1.jpg?9849" alt="Face Mask">
                <h2>Face Mask</h2>
                <p>Masker wajah dengan ekstrak alami untuk hidrasi dan peremajaan kulit.</p>
                <div class="product-price">Rp240.000</div>
            </div>
            <!-- Product 2 -->
            <div class="product">
                <img src="https://skyorganics.com/cdn/shop/products/2LIPSET4BP_HeroProduct_8f7bf535-e81b-4762-bd6c-756ba69394a7_1000x.jpg?v=1717948230" alt="Organic Lip Balm">
                <h2>Organic Lip Balm</h2>
                <p>Balm bibir organik dengan aroma manis dan melembapkan bibir kering.</p>
                <div class="product-price">Rp135.000</div>
            </div>
            <!-- Product 3 -->
            <div class="product">
                <img src="https://images-cdn.ubuy.co.id/633ad4c438d9687ff7131758-roushun-vitamin-c-serum-thin-and-highly.jpgm" alt="Vitamin C Serum">
                <h2>Vitamin C Serum</h2>
                <p>Serum vitamin C untuk mencerahkan kulit dan mengurangi kerutan.</p>
                <div class="product-price">Rp337.000</div>
            </div>
            <!-- Product 4 -->
            <div class="product">
                <img src="https://image.made-in-china.com/2f0j00wFViWqkRPmcA/Private-Label-Exfoliating-Face-and-Body-Scrub-Matcha-Green-Tea-Body-Scrub.webp" alt="Green Tea Scrub">
                <h2>Green Tea Scrub</h2>
                <p>Scrub teh hijau untuk mengangkat sel-sel kulit mati dan memberikan kesegaran.</p>
                <div class="product-price">Rp195.000</div>
            </div>
            <!-- Product 5 -->
            <div class="product">
                <img src="https://upload.jaknot.com/2024/01/images/products/04194e/original/mayjam-essential-oil-fragrance-minyak-aromatherapy-10ml-mj078.jpg" alt="Essential Oil">
                <h2>Essential Oil</h2>
                <p>Minyak esensial alami untuk relaksasi dan aromaterapi.</p>
                <div class="product-price">Rp280.000</div>
            </div>
            <!-- Product 6 -->
            <div class="product">
                <img src="https://farmtojar.com/wp-content/uploads/2022/04/herbal-tea-needs.jpg" alt="Herbal Tea">
                <h2>Herbal Tea</h2>
                <p>Teh herbal dengan campuran bunga dan rempah untuk kesehatan dan relaksasi.</p>
                <div class="product-price">Rp142.000</div>
            </div>
        </div>
    </div>
</body>
</html>

