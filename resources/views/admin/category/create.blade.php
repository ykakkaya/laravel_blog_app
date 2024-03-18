@extends('admin.layout.admin_layout')
@section('admin_content')

    <div class="card">
        <form action="{{route('admin.category.store')}}" method="POST">
            @csrf
            <label>Category Title</label>
            <input type="text" class="form-control" name="title">
            <br>
            <label>Category Status</label>
            <select class="custom-select" name="status">
                <option value="0">Passive</option>
                <option value="1">Active</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection
