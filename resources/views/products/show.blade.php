<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone X | E-Shop</title>
    <style>
        body {
            font-family: 'Roboto', 'Segoe UI', Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #1a2236;
            color: #fff;
            padding: 18px 0;
            text-align: center;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: 2px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 24px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(26, 34, 54, 0.08);
            display: flex;
            gap: 40px;
        }

        .product-image-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .product-image {
            width: 320px;
            height: 320px;
            background: linear-gradient(135deg, #e0e3ea 60%, #f5f7fa 100%);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 120px;
            color: #b0b3b8;
            box-shadow: 0 1px 8px rgba(26, 34, 54, 0.07);
            margin-bottom: 24px;
        }

        .thumbnail-row {
            display: flex;
            gap: 12px;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            background: #e0e3ea;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #b0b3b8;
            cursor: pointer;
            border: 2px solid transparent;
            transition: border-color 0.2s;
        }

        .thumbnail.selected {
            border-color: #1976d2;
        }

        .product-details-section {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .product-title {
            font-size: 2.1rem;
            font-weight: 700;
            color: #1a2236;
            margin-bottom: 12px;
        }

        .product-rating {
            color: #f6c700;
            font-size: 1.1rem;
            margin-bottom: 18px;
        }

        .product-price {
            font-size: 1.7rem;
            color: #1976d2;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .product-desc {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 22px;
        }

        .features {
            margin-bottom: 28px;
        }

        .features-title {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .features-list {
            list-style: disc inside;
            color: #222;
            font-size: 1rem;
            margin: 0 0 0 16px;
            padding: 0;
        }

        .buy-section {
            margin-top: 32px;
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .btn-buy {
            background: linear-gradient(90deg, #1976d2 70%, #145ea8 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 16px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 1px 4px rgba(26, 34, 54, 0.07);
            transition: background 0.2s, box-shadow 0.2s;
        }

        .btn-buy:hover {
            background: linear-gradient(90deg, #145ea8 70%, #1976d2 100%);
            box-shadow: 0 2px 8px rgba(26, 34, 54, 0.13);
        }

        .stock {
            font-size: 1.05rem;
            color: #388e3c;
            font-weight: 600;
        }

        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                gap: 0;
            }

            .product-image-section,
            .product-details-section {
                width: 100%;
            }

            .product-image {
                width: 220px;
                height: 220px;
                font-size: 70px;
            }
        }
    </style>
</head>

<body>
    <div class="navbar">
        E-Shop | Product Details
    </div>
    <div class="container">
        <div class="product-image-section">
            <div class="product-image">📱</div>
            <div class="thumbnail-row">
                <div class="thumbnail selected">📱</div>
                <div class="thumbnail">🔋</div>
                <div class="thumbnail">📷</div>
                <div class="thumbnail">💾</div>
            </div>
        </div>
        <div class="product-details-section">
            <div class="product-title">Smartphone X</div>
            <div class="product-rating">★★★★★ (4.8/5, 1,245 ratings)</div>
            <div class="product-price">$799</div>
            <div class="product-desc">
                Experience the next generation of mobile technology with Smartphone X. Featuring a high-resolution
                camera, ultra-fast processor, and a sleek, modern design. Perfect for work, play, and everything in
                between.
            </div>
            <div class="features">
                <div class="features-title">Key Features:</div>
                <ul class="features-list">
                    <li>6.7" OLED Display, 120Hz refresh rate</li>
                    <li>Triple-lens 108MP camera system</li>
                    <li>5G connectivity & Dual SIM support</li>
                    <li>Fast charging (50% in 20 min)</li>
                    <li>Face & fingerprint unlock</li>
                    <li>512GB Storage, 12GB RAM</li>
                </ul>
            </div>
            <div class="buy-section">
                <button class="btn-buy">Add to Cart</button>
                <span class="stock">In Stock</span>
            </div>
        </div>
    </div>
</body>

</html>
