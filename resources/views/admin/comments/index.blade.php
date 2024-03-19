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
                                            <th>Article</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Author</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($comments as $comment)
                                            <tr>
                                                <th>{{ $comment->article->title }}</th>
                                                <th>{{ $comment->title }}</th>
                                                <th>{!! $comment->description !!}</th>
                                                <th>{{ $comment->status ==0?"Passive":"Active" }}</th>
                                                <th>{{ $comment->user->name }}</th>
                                                <th><a href="{{route('admin.comment.show',$comment->id)}}" class="btn btn-info">Show</a>
                                                    <a href="{{route('admin.comment.edit',$comment->id)}}" class="btn btn-warning">Update</a></th>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                        <tr>
                                            <th>Article</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Author</th>
                                            <th>Actions</th>

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
