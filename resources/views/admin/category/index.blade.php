@extends('layouts.master')
@section('title', 'Categories')
@section('content')

    <div class="container-fluid px-4 mt-4 p-3">

        <div class="card">
            <div class="card-header">
                <h4 class="flex justify-center">View Category <a href="{{ url('admin/add-category') }}"
                        class="btn btn-primary btn-sm flex justify-center float-end">
                        Add Category</a></h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <img src="{{ asset('upload/category/' . $item->image) }}" width="50px" height="50px"
                                        alt="Img">
                                </td>
                                <td>{{ $item->status == '1' ? 'Shown' : 'Hidden' }}</td>
                                <td>
                                    <a href="{{ url('admin/edit-category/' . $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/delete-category/' . $item->id) }}"
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
