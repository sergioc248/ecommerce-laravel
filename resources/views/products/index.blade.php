@extends('layouts.app')

@section('content')
    <div class="container-index">
        <h1>Technology Products</h1>
        <div class="products-grid">
            <!-- Product Card 1 -->
            <div class="product-card">
                <div class="product-image-index">📱</div>
                <div class="product-title-index">Smartphone X</div>
                <div class="product-desc-index">Experience the next generation of mobile technology with Smartphone X.
                    High-resolution camera, ultra-fast processor, and sleek design.</div>
                <div class="product-price-index">$799</div>
                <a href="/products/show" class="btn" style="display:inline-block;text-decoration:none;">View Details</a>
            </div>
            <!-- Product Card 2 -->
            <div class="product-card">
                <div class="product-image-index">💻</div>
                <div class="product-title-index">Laptop Pro</div>
                <div class="product-desc-index">Laptop Pro delivers professional performance in a lightweight body. 16GB RAM,
                    512GB SSD, and a vibrant display for work and play.</div>
                <div class="product-price-index">$1199</div>
                <a href="/products/show" class="btn" style="display:inline-block;text-decoration:none;">View Details</a>
            </div>
            <!-- Product Card 3 -->
            <div class="product-card">
                <div class="product-image-index">🎧</div>
                <div class="product-title-index">Wireless Headphones</div>
                <div class="product-desc-index">Immerse yourself in music with noise-cancelling wireless headphones. 30-hour
                    battery life and premium sound quality.</div>
                <div class="product-price-index">$199</div>
                <a href="/products/show" class="btn" style="display:inline-block;text-decoration:none;">View Details</a>
            </div>
            <!-- Product Card 4 -->
            <div class="product-card">
                <div class="product-image-index">⌚</div>
                <div class="product-title-index">Smartwatch Z</div>
                <div class="product-desc-index">Stay connected and track your fitness with Smartwatch Z. Water resistant,
                    notifications, and stylish design.</div>
                <div class="product-price-index">$249</div>
                <a href="/products/show" class="btn" style="display:inline-block;text-decoration:none;">View Details</a>
            </div>
            <!-- Add more product cards as needed -->
        </div>
    </div>
@endsection
