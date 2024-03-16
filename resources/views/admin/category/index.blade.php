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
                                        <tr>
                                            <td>Travel</td>
                                            <td>Karadeniz
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nulla magni ad reprehenderit culpa nostrum illo amet voluptatem a, nam est maxime dolores repudiandae tempore impedit tenetur harum quas omnis.Ipsa dignissimos ab iure cum, voluptates, quibusdam rem, consequuntur dolorem totam eligendi molestias ducimus ea at assumenda magni optio odio. Voluptatem enim cupiditate labore adipisci quaerat, quos accusamus nisi libero.</td>
                                            <td><img src="https://picsum.photos/200/300"></td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Technology</td>
                                            <td>Apple
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, nulla magni ad reprehenderit culpa nostrum illo amet voluptatem a, nam est maxime dolores repudiandae tempore impedit tenetur harum quas omnis.Ipsa dignissimos ab iure cum, voluptates, quibusdam rem, consequuntur dolorem totam eligendi molestias ducimus ea at assumenda magni optio odio. Voluptatem enim cupiditate labore adipisci quaerat, quos accusamus nisi libero.</td>
                                            <td><img src="https://picsum.photos/seed/picsum/200/300"></td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>

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
