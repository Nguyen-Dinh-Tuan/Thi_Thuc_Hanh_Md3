@extends('home')
@section('page_title')
    Danh sach san pham
@endsection
@section('content')
    {{--    @include('layouts.core.navbar')--}}

    <div class="card mt-2">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body col-6">
            <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{ $product->name }}" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input value="{{ $product->price }}" type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <img style="width: 400px;height: 200px" class="img-thumbnail img-fluid"
                         src="{{asset ('storage/'.$product->image)}} " alt="">
                    <input type="file" name="image_path" class="form-control">
                    <input style="width: 100px" type="hidden" class="form-control" value="{{ $product->image }}">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input value="{{ $product->type }}" type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label>Group</label>
                    <select class="custom-select" name="category_id">
                        <option selected>Choose...</option>
                        @foreach($categories as $category)
                            <option
                                @if($category->id == $product->category_id )
                                selected
                                @endif
                                value="{{ $category->id }}">{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

