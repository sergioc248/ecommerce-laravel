@extends('layouts.app')

@section('content')
    <div class="container-create">
        <h1>Create Product</h1>

        <div class="form-grid">
            <div class="form-panel">
                <form action="/products" method="POST">
                    <!-- CSRF would be here in a full app: @csrf -->
                    <label for="title">Product Title</label>
                    <input id="title" name="title" type="text" placeholder="e.g. Smartphone X" />

                    <label for="price">Price</label>
                    <input id="price" name="price" type="text" placeholder="$799" />

                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="6" placeholder="Short product description..."></textarea>

                    <label for="category">Category</label>
                    <select id="category" name="category">
                        <option>Technology</option>
                        <option>Accessories</option>
                        <option>Wearables</option>
                    </select>

                    <div style="margin-top:12px; display:flex; gap:10px;">
                        <button class="btn-primary" type="submit">Create Product</button>
                        <a href="/products"
                            style="text-decoration:none; align-self:center; color:#1976d2; font-weight:600">Cancel</a>
                    </div>
                </form>
            </div>

            <div>
                <div class="preview-card">
                    <div class="product-image-create">📦</div>
                    <div class="product-title-create">Preview Title</div>
                    <div class="product-price-create">$0</div>
                    <div class="product-desc-index" style="color:#4a5568; text-align:center; margin-bottom:12px">Short preview
                        description of the product will appear here.</div>
                    <a href="/products/show" style="text-decoration:none; margin-top:6px;" class="btn-primary">View
                        Preview</a>
                </div>
            </div>
        </div>

        <div style="margin-top:18px">
            <a href="/products" style="text-decoration:none;color:#1976d2;font-weight:600">← Back to Products</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-form-create">
        <h1>Add a New Product</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Device selection removed -->
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Describe the product" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" name="price" id="price" min="0" step="0.01" placeholder="0.00"
                    required>
            </div>
            <div class="form-group">
                <label for="image">Product Image</label>
                <input type="file" name="image" id="image" accept="image/*">
            </div>
            <button type="submit" class="btn-submit">Add Product</button>
        </form>
    </div>
@endsection
