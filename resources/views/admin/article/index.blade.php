@extends('admin.layout.admin_layout')


@section('admin_content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog Articles</h3>
                        </div>
                        <div class="card">
                            {{-- <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div> --}}
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Short Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($articles as $article )
<tr>
                                            <td>{{$article->category->title}}</td>
                                            <td>{{$article->title}}</td>
                                            <td>{{$article->short_description}}</td>
                                            <td><img src="{{asset($article->image)}}" style="width: 15%"></td>
                                            <td>{{$article->status==1? "Active":"Passive"}}</td>
                                            <td>
                                                <a href="{{route('admin.article.edit',$article->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="{{route('admin.article.destroy',$article->id)}}" id="delete" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Short Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

    </section>
@endsection
