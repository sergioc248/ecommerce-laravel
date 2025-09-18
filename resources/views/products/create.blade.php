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
            max-width: 1100px;
            margin: 40px auto;
            padding: 24px;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(26, 34, 54, 0.08);
        }

        h1 {
            color: #1a2236;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 18px;
            border-bottom: 2px solid #e0e3ea;
            padding-bottom: 12px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 360px;
            gap: 28px;
            align-items: start;
        }

        .form-panel {
            background: transparent;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a2236;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #e0e3ea;
            border-radius: 8px;
            background: #fff;
            font-size: 1rem;
            color: #222;
            box-shadow: inset 0 1px 3px rgba(26, 34, 54, 0.02);
            margin-bottom: 12px;
        }

        .btn-primary {
            background: linear-gradient(90deg, #1976d2 70%, #145ea8 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
        }

        .preview-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(26, 34, 54, 0.06);
            padding: 22px;
            border: 1px solid #e0e3ea;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .product-image {
            width: 140px;
            height: 140px;
            background: linear-gradient(135deg, #e0e3ea 60%, #f5f7fa 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 54px;
            color: #b0b3b8;
            margin-bottom: 14px;
        }

        .product-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1a2236;
            margin-bottom: 8px;
            text-align: center;
        }

        .product-price {
            font-size: 1.05rem;
            color: #1976d2;
            font-weight: 700;
            margin-bottom: 12px;
        }

        @media (max-width: 900px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
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
                    <div class="product-image">📦</div>
                    <div class="product-title">Preview Title</div>
                    <div class="product-price">$0</div>
                    <div class="product-desc" style="color:#4a5568; text-align:center; margin-bottom:12px">Short preview
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
@extends('layouts.app')

@section('css')
    <style>
        body {
            font-family: 'Roboto', 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #b7aaff 0%, #e0c3fc 100%);
            min-height: 100vh;
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
            max-width: 480px;
            margin: 48px auto;
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 4px 32px rgba(26, 34, 54, 0.10);
            padding: 40px 36px 36px 36px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: #1a2236;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 32px;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-size: 1.08rem;
            font-weight: 600;
            color: #222;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            font-size: 1rem;
            padding: 12px 14px;
            border: 1px solid #e0e3ea;
            border-radius: 10px;
            background: #f5f7fa;
            margin-bottom: 2px;
            resize: vertical;
        }

        input[type="file"] {
            background: #f5f7fa;
            border: 1px dashed #b7aaff;
            padding: 16px 14px;
        }

        textarea {
            min-height: 80px;
            max-height: 200px;
        }

        .btn-submit {
            background: linear-gradient(90deg, #7c3aed 70%, #a78bfa 100%);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 16px 0;
            font-size: 1.15rem;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(26, 34, 54, 0.10);
            transition: background 0.2s, box-shadow 0.2s;
        }

        .btn-submit:hover {
            background: linear-gradient(90deg, #a78bfa 70%, #7c3aed 100%);
            box-shadow: 0 4px 16px rgba(26, 34, 54, 0.13);
        }

        .device-select {
            display: flex;
            gap: 16px;
            margin-bottom: 8px;
        }

        .device-btn {
            background: #f5f7fa;
            border: 2px solid #e0e3ea;
            border-radius: 8px;
            padding: 10px 18px;
            font-size: 1rem;
            color: #7c3aed;
            font-weight: 600;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
        }

        .device-btn.selected,
        .device-btn:hover {
            border-color: #7c3aed;
            background: #ede9fe;
        }
    </style>
@endsection

@section('content')
    <div class="container">
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
