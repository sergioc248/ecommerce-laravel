@extends('layouts.app')

@section('css')
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
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            text-align: left;
            color: #1a2236;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 32px;
            border-bottom: 2px solid #e0e3ea;
            padding-bottom: 12px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 36px;
        }

        .product-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(26, 34, 54, 0.08);
            padding: 32px 24px 24px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #e0e3ea;
            transition: box-shadow 0.2s, border-color 0.2s;
        }

        .product-card:hover {
            box-shadow: 0 6px 32px rgba(26, 34, 54, 0.13);
            border-color: #1976d2;
        }

        .product-image {
            width: 110px;
            height: 110px;
            background: linear-gradient(135deg, #e0e3ea 60%, #f5f7fa 100%);
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #b0b3b8;
            box-shadow: 0 1px 4px rgba(26, 34, 54, 0.07);
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1a2236;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-desc {
            font-size: 1rem;
            color: #4a5568;
            margin-bottom: 18px;
            text-align: center;
        }

        .product-price {
            font-size: 1.15rem;
            color: #1976d2;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .btn {
            background: linear-gradient(90deg, #1976d2 70%, #145ea8 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 1.05rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 1px 4px rgba(26, 34, 54, 0.07);
            transition: background 0.2s, box-shadow 0.2s;
        }

        .btn:hover {
            background: linear-gradient(90deg, #145ea8 70%, #1976d2 100%);
            box-shadow: 0 2px 8px rgba(26, 34, 54, 0.13);
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1>Technology Products</h1>
        <div class="products-grid">
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="product-image">📱</div>
                <div class="product-title">Smartphone X</div>
                <div class="product-desc">Experience the next generation of mobile technology with Smartphone X.
                    High-resolution camera, ultra-fast processor, and sleek design.</div>
                <div class="product-price">$799</div>
                <button class="btn">View Details</button>
            </div>
            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image">💻</div>
                <div class="product-title">Laptop Pro</div>
                <div class="product-desc">Laptop Pro delivers professional performance in a lightweight body. 16GB RAM,
                    512GB SSD, and a vibrant display for work and play.</div>
                <div class="product-price">$1199</div>
                <button class="btn">View Details</button>
            </div>
            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image">🎧</div>
                <div class="product-title">Wireless Headphones</div>
                <div class="product-desc">Immerse yourself in music with noise-cancelling wireless headphones. 30-hour
                    battery life and premium sound quality.</div>
                <div class="product-price">$199</div>
                <button class="btn">View Details</button>
            </div>
            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image">⌚</div>
                <div class="product-title">Smartwatch Z</div>
                <div class="product-desc">Stay connected and track your fitness with Smartwatch Z. Water resistant,
                    notifications, and stylish design.</div>
                <div class="product-price">$249</div>
                <button class="btn">View Details</button>
            </div>
            <!-- Add more product cards as needed -->
        </div>
    </div>
@endsection