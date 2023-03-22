@extends('layouts.app')
@section('content')
    <main class="py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Product Category</h2>
                    </div>
                    <div class="pull-right">

                        <a class="btn btn-success" href="{{ route('productcategory.create') }}"> Create New Product
                            category</a>

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
                    <th>Title</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($product_categories as $productcategory)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $productcategory->title }}</td>
                        <td>{{ $productcategory->description }}</td>
                        <td>
                            <form action="{{ route('productcategory.destroy', $productcategory->id) }}" method="POST">
                                <a class="btn btn-info"
                                    href="{{ route('productcategory.show', $productcategory->id) }}">Show</a>
                                @can('productcategory-edit')
                                    <a class="btn btn-primary"
                                        href="{{ route('productcategory.edit', $productcategory->id) }}">Edit</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                @can('productcategory-delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $product_categories->links() !!}
        </div>
    </main>
@endsection
