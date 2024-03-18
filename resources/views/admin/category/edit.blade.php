@extends('admin.layout.admin_layout')
@section('admin_content')

    <div class="card">
        <form action="{{route('admin.category.update',$category->id)}}" method="POST">
            @csrf

            <label>Category Title</label>
            <input type="text" class="form-control" name="title" value="{{$category->title}}">
            <br>
            <label>Category Status</label>
            <select class="custom-select" name="status">
                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Passive</option>
                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection
