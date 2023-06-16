@extends('layouts.master')
@section('title', 'Categories')
@section('content')

    <div class="container-fluid px-4 mt-4 p-3">
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3>
                            Add Slider
                            <a href="{{ url('admin/sliders') }}" class="btn btn-danger btn-sm text-white float-end">
                                Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/sliders-create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" style="width:30px;height:30px" id=""
                                    class="form-control" />
                                Checked=Hidden,UnChecked=Visible
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
