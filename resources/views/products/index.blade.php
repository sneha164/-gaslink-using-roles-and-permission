@extends('layouts.app')
@section('content')
    <main class="py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Products</h2>
                    </div>
                    <div class="pull-right">

                        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>

                    </div>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category ID</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>

                    <th width="280px">Action</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td> <img src="{{ asset('storageofproduct/images/products/' . $product->image) }}"
                                alt="{{ $product->image }}" height="100" width="100"> </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                                @can('product-edit')
                                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('product-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $products->links() !!}
        </div>
    </main>
@endsection
