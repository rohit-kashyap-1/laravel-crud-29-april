@extends('layouts.master')

@section('title','Categories list')

@section('content')
<div class="container p-4 rounded  bg-light shadow ">
    <div class="d-flex justify-content-between align-items-start mb-2">
    <h3>Blog Categories</h3>
    <a href="/create-category" class="btn btn-success btn-sm">Add Category</a>
    </div>
    <table class="table table-striped  table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th style="width:140px">Action</th>
        </tr>
        <?php $count=1; ?>
        @foreach($categories as $category)
        <tr>
            <td>{{$count}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->description}}</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td>
                <a href="/edit-category/{{$category->id}}" class="btn btn-primary btn-sm">Edit</a>
                <a href="/delete-category/{{$category->id}}" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>

        <?php $count++; ?>
        @endforeach
    </table>

</div>


@endsection
