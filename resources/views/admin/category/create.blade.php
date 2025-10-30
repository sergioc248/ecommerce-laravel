@extends ('admin.layouts.app')

@section('content')
    <h1>Add new Category</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.category.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-12">
                    <label for="name" class="form-label fw-semibold mb-1">Category Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Laptops"
                        required aria-describedby="nameHelp"
                        class="form-control form-control-lg border border-1 rounded-3 px-3 py-2 shadow-sm @error('name') is-invalid @enderror">
                    <div id="nameHelp" class="form-text text-muted small">Enter a clear, descriptive category name (max 255
                        characters).</div>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-success">Create Category</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                </div>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
