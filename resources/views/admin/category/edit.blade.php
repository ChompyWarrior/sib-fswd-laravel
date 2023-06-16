@extends('layouts.master')
@section('title', 'Categories')
@section('content')

    <div class="container-fluid px-4 mt-4">
        <div class="card-header">
            <h4 class="">Edit Category</h4>
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
            <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="{{$category->name}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$category->slug}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" rows="5" class="form-control">{{$category->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$category->meta_title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{$category->meta_description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keyword" rows="3" class="form-control">{{$category->meta_keyword}}</textarea>
                </div>

                <h4>Status Mode</h4>
                <div class="row mb-4 mt-4">
                    {{-- <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status">
                    </div> --}}
                    <div class="col-md-3 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" {{$category->status == '1'?'checked':''}}  name="status">
                    </div>
                
                </div>
                <div class="col-md-6 float-end">
                    <button type="submit" class="btn btn-primary float-end" >Update Category</button>
                </div>
            </form>
        </div>
    </div>

@endsection
