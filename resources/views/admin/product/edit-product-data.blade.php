@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="card-header">
            <h4 class="">Edit Product</h4>
        </div>
        <td>
            <img src="{{ asset('upload/product/' . $product->image) }}" width="200px" height="200px"
                alt="Img">
        </td>
        
        
        <div class="card-body">
            <form action="{{ url('admin/update-product-data/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Product Name</label>
                    <input type="text" name="name" id="" value="{{$product->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="integer" name="price" value="{{$product->price}}"id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Category ID</label>
                    <input type="text" name="category_id" value="{{$product->category_id}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Change Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </div>
            </form>
        </div>


    </div>


@endsection
