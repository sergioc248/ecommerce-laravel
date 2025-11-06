@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header pb-0 d-flex align-items-center justify-content-between">
                    <h6 class="mb-0">Create Product</h6>
                    <a href="{{ route('admin.index') }}" class="btn btn-sm bg-gradient-dark">Back to Dashboard</a>
                </div>
                <div class="card-body">
                    <style>
                        /* Scoped styles to differentiate product create inputs */
                        .product-create .form-control,
                        .product-create .form-select {
                            background-color: #f8fafc;
                            /* slate-50 */
                            border-color: #cbd5e1;
                            /* slate-300 */
                        }

                        .product-create .form-control:focus,
                        .product-create .form-select:focus {
                            border-color: #3f51b5;
                            /* indigo */
                            box-shadow: 0 0 0 .2rem rgba(63, 81, 181, .15);
                        }

                        .product-create .input-group-text {
                            background: #f1f5f9;
                            /* slate-100 */
                            border-color: #cbd5e1;
                            color: #334155;
                        }

                        .product-create .section-title {
                            font-weight: 700;
                            font-size: .95rem;
                            color: #334155;
                            /* slate-700 */
                            text-transform: uppercase;
                            letter-spacing: .04em;
                            margin: .25rem 0 .75rem;
                        }
                    </style>

                    <form class="product-create" action="{{ route('admin.products.create') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h6 class="section-title">Basic information</h6>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="material-symbols-rounded">shopping_bag</i></span>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter product name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="material-symbols-rounded">description</i></span>
                                        <textarea class="form-control" name="description" id="description" rows="4" placeholder="Describe the product"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <h6 class="section-title">Pricing</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price ($)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="material-symbols-rounded">payments</i></span>
                                        <input type="number" class="form-control" name="price" id="price"
                                            min="0" step="0.01" placeholder="0.00" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Categoría del producto -->
                            <div class="col-12 mt-2">
                                <h6 class="section-title">Classification</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="material-symbols-rounded">category</i></span>
                                        <select class="form-select" name="category" id="category">

                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                            <option value="">Select a category</option>
                                            <option value="technology">Technology</option>
                                            <option value="accessories">Accessories</option>
                                            <option value="wearables">Wearables</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Marca del producto -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i
                                                class="material-symbols-rounded">brand_awareness</i></span>
                                        <select class="form-select" name="category" id="brand">

                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            <option value="">Select a category</option>
                                            <option value="technology">Technology</option>
                                            <option value="accessories">Accessories</option>
                                            <option value="wearables">Wearables</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mb-3">
                                    <h6 class="section-title">Media</h6>
                                    <label class="form-label">Product Image</label>
                                    <div class="d-flex align-items-center gap-3">
                                        <label for="image"
                                            class="btn btn-outline-dark mb-0 d-inline-flex align-items-center">
                                            <i class="material-symbols-rounded me-1">upload</i>
                                            Choose image
                                        </label>
                                        <input class="d-none" type="file" name="image" id="image" accept="image/*">
                                        <span class="text-secondary small" id="image-filename">No file chosen</span>
                                    </div>
                                    <small class="form-text text-muted">Accepted formats: JPG, PNG, GIF. Max size
                                        2MB.</small>
                                    <div class="mt-3">
                                        <img id="image-preview" class="img-thumbnail d-none" style="max-height: 140px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn bg-gradient-dark">Create Product</button>
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.getElementById('image');
        const filename = document.getElementById('image-filename');
        const preview = document.getElementById('image-preview');
        if (input && filename) {
            input.addEventListener('change', function() {
                if (this.files && this.files.length) {
                    const file = this.files[0];
                    filename.textContent = file.name;
                    if (preview) {
                        const reader = new FileReader();
                        reader.onload = e => {
                            preview.src = e.target.result;
                            preview.classList.remove('d-none');
                        };
                        reader.readAsDataURL(file);
                    }
                } else {
                    filename.textContent = 'No file chosen';
                    if (preview) {
                        preview.src = '';
                        preview.classList.add('d-none');
                    }
                }
            });
        }
    });
</script>
