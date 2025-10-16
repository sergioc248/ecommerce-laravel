@extends('layouts.app')

@section('content')
    <div class="container-show">
        <div class="product-image-section">
            <div class="product-image-show">📱</div>
            <div class="thumbnail-row">
                <div class="thumbnail selected">📱</div>
                <div class="thumbnail">🔋</div>
                <div class="thumbnail">📷</div>
                <div class="thumbnail">💾</div>
            </div>
        </div>
        <div class="product-details-section">
            <div class="product-title-show">Smartphone X</div>
            <div class="product-rating">★★★★★ (4.8/5, 1,245 ratings)</div>
            <div class="product-price-show">$799</div>
            <div class="product-desc-show">
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
            <div style="margin-top:18px">
                <a href="/products" style="text-decoration:none;color:#1976d2;font-weight:600">← Back to Products</a>
            </div>
        </div>
    </div>
@endsection
