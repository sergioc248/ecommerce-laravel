<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product | E-Shop</title>
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
</head>

<body>
    <div class="navbar">
        E-Shop | Add Product
    </div>
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
</body>

</html>
