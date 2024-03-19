@extends('admin.layout.admin_layout')
@section('admin_content')

    <div class="card">
        <form action="{{route('admin.article.update',$article->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <label> Title</label>
            <input type="text" class="form-control" name="title" value="{{$article->title}}">
            <br>
            <label> Short Description</label>
            <textarea class="form-control" name="short_description">{{$article->short_description}}</textarea>
            <br>
            <label> Description</label>
            <textarea class="form-control" id="summernote" name="long_description">{!!$article->long_description!!}</textarea>
            <br>
            <label> Status</label>
            <select class="custom-select" name="status">
                <option value="0" {{$article->status==0 ?'selected':''}}>Passive</option>
                <option value="1" {{$article->status==1? 'selected':''}}>Active</option>
            </select>
            <label> Category</label>
            <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if ($category->id==$article->category_id) selected @endif>{{$category->title}}</option>
                @endforeach
            </select>

            <br><br>
            <input type="file" class="form-control" name="image">
            <img src="{{asset($article->image)}}" alt="" width="15%">
            <br><br>
            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
@endsection
