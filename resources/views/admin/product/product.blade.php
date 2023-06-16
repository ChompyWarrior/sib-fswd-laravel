@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <div class="container-fluid px-4 mt-4 p-3">

        <div class="card">
            <div class="card-header">
                <h4 class="flex justify-center">View Product <a href="{{ url('admin/add-product-data') }}"
                        class="btn btn-primary btn-sm flex justify-center float-end">
                        Add Product</a></h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category ID</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->price }}</td>
                                <td>{{ $p->category_id }}</td>
                                <td>
                                    <img src="{{ asset('upload/product/' . $p->image) }}" width="50px" height="50px"
                                        alt="Img">
                                </td>
                                <td>
                                    <a href="{{ url('admin/edit-product-data/' . $p->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-product-data/' . $p->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- 

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Category</li>
        </ol>
        <div class="row">

        </div> --}}
    </div>

@endsection
