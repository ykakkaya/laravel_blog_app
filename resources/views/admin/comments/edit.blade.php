@extends('admin.layout.admin_layout')
@section('admin_content')

    <div class="card">
        <form action="{{route('admin.comment.update',$comment->id)}}" method="POST" >
            @csrf
            <label> Title</label>
            <input type="text" class="form-control" name="title" value="{{$comment->title}}">
            <br>
            <label> Description</label>
            <textarea class="form-control" id="summernote" name="description">{{$comment->description}}</textarea>
            <br>
            <label> Status</label>
            <select class="custom-select" name="status">
                <option value="0" {{$comment->status==0?'selected':''}}>Passive</option>
                <option value="1" {{$comment->status==1?'selected':''}}>Active</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
@endsection
