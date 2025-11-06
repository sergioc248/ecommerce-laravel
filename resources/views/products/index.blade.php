@extends('layouts.app')

@section('content')
    <div class="container-index">
        <h1>Nuestros Productos</h1>

        <!-- Categories Filter -->
        <div class="categories-filter mb-4" style="text-align: center; margin-bottom: 2rem;">
            <a href="{{ route('products.index') }}" class="btn btn-warning me-2 mb-2">{{ __('Todos') }}</a>
            @foreach ($categories as $category)
                <a href="{{ route('products.index', ['category' => $category->id]) }}"
                    class="btn btn-outline-warning me-2 mb-2">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <div class="products-grid">
            @forelse ($products as $product)
                <div class="product-card">
                    @if ($product->image)
                        <div class="product-image-index">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                style="max-width: 100%; height: auto;">
                        </div>
                    @else
                        <div class="product-image-index">📦</div>
                    @endif
                    <div class="product-title-index">{{ $product->name }}</div>
                    <div class="product-desc-index">{{ Str::limit($product->description, 100) }}</div>
                    <div class="product-price-index">${{ number_format($product->price, 2) }}</div>
                    <a href="{{ route('products.show', $product->id) }}" class="btn"
                        style="display:inline-block;text-decoration:none;">View Details</a>
                </div>
            @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 2rem;">
                    <p style="color: #666; font-size: 1.1rem;">No products found</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
