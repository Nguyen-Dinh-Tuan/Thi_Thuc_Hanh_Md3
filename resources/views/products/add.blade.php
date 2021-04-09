@extends('home')
@section('page_title')
    Danh sach san pham
@endsection
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body col-lg-6">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{ old('name') }}" type="text" name="name" class="form-control">
                    @error('name')
                    <p class="alert-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input value="{{ old('price') }}" type="text" name="price" class="form-control">
                    @error('price')
                    <p class="alert-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input value="{{ old('image') }}" type="file" name="image" class="form-control ">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input value="{{ old('type') }}" type="text" name="type" class="form-control">
                    @error('type')
                    <p class="alert-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="custom-select" name="category_id">
                        <option selected>Choose...</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

