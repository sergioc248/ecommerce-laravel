@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product List</h5>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
            <table class="table align-items-center mb-0">
                <thead>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Brand</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Created at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Updated at</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>

                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->name }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">${{ $product->price }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->category_id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->brand_id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->created_at }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->updated_at }}</p>
                            </td>
                            <td>
                                {{--        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
