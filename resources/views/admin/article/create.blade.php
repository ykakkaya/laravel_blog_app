@extends('admin.layout.admin_layout')
@section('admin_content')

    <div class="card">
        <form action="{{route('admin.article.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label> Title</label>
            <input type="text" class="form-control" name="title">
            <br>
            <label> Short Description</label>
            <textarea class="form-control" name="short_description"></textarea>
            <br>
            <label>Long Description</label>
            <textarea class="form-control" id="summernote" name="long_description"></textarea>
            <br>
            <label> Status</label>
            <select class="custom-select" name="status">
                <option value="0">Passive</option>
                <option value="1">Active</option>
            </select>
            <label> Category</label>
            <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <br><br>
            <input type="file" class="form-control" name="image">

            <br><br>
            <button type="submit" class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection
