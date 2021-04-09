@extends('home')
@section('page_title')
@endsection

@section('content')
    <h1 class="mt-4">Danh sach san pham </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary" href="{{ route('products.create') }}">Add</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <td>{{ $key+ $products->firstItem()}}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td><img src="{{ asset('storage/'.$product->image) }}" width="150" alt=""></td>
                            <td>{{ $product->type }}</td>
                            <td>{{$product->category->name}}</td>
                            <td>
                                <a onclick="return confirm('Are you sure delete user: {{ $product->name }}')"
                                   class="btn btn-danger" href="{{ route('products.delete', $product->id) }}">Delete</a>
                                <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="pagination justify-content-end">
                    <li> {{$products->links("pagination::bootstrap-4")}}</li>
                </ul>
            </div>
        </div>
@endsection
