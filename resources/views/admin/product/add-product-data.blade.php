@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="card-header">
            <h4 class="">Add Product</h4>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div class="card-body">
            <form action="{{ url('admin/store-product-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Product Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="integer" name="price" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Category ID</label>
                    <input type="text" name="category_id" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </div>
            </form>
        </div>


    </div>


@endsection
