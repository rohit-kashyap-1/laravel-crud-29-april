@extends('layouts.master')
@section('title', 'Edit category')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-4 shadow rounded">
            <h3>Edit Cateogry</h3>
            <!-- $category -->
        <form method='POST' action='/edit-category' enctype='multipart/form-data'>
                            <input type='hidden' name='_token' value='{{csrf_token()}}'>
                            <input type="hidden" name="id" value="{{$category->id}}">
                            <div class='mb-3'>
                                <label for='title' class='form-label'>Title</label>
                                <input type='text' class='form-control' id='title' name='title' value="{{$category->title}}">
                            </div>
                            <div class='mb-3'>
                                <label for='description' class='form-label'>Description</label>
                                <textarea rows="10" class="form-control"  name='description'>{{$category->description}}</textarea>
                            </div>
                            <button class="btn btn-dark">Update</button>
                        </form>
        </div>
    </div>
</div>
@endsection
