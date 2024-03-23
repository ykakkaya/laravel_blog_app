@extends('front.layout.main_layout')
@section('app_content')
    <header class="masthead" style="background-image: url('{{ asset('blog/assets/img/about-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>ykakkaya Blog</h1>
                        <span class="subheading"> Travel Technology .. etc Blogs</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form action="{{ route('home.search') }}" method="GET">
                    <div class="form-group">
                          <div class="row">
                            <input type="text" name="search" class="form-control col" placeholder="Search...">

                            <div class="col-2" style="display: flex; align-items: center;">
                                <button type="submit" class="btn btn-primary" style="flex: 1;"><i class="fas fa-search"></i></button>
                                <a href="{{ route('home.index') }}" class="btn btn-danger" style="flex: 1; margin-left: 5px;"><i class="fas fa-times"></i></a>
                            </div>


                        </div>
                    </div>
                </form>
                <br><br>
                <!-- Post preview-->
                @foreach ($articles as $article)
                <div class="post-preview" style="display: flex; align-items: center;">
                    <a href="{{ route('home.post.show', $article->id) }}" style="flex: 1;">
                        <img src="{{ $article->image }}" alt="" style="height: 100px; margin-right: 10px;">
                        <div>
                            <h2 class="post-title">{{ $article->title }}</h2>
                            <h5 class="post-subtitle">{{ $article->short_description }}</h3>
                            <p class="post-meta">
                                Posted by <a href="#!">{{ $article->user->name }}</a> on {{ $article->created_at->format('d-m-Y') }}
                            </p>
                        </div>
                    </a>
                </div>
                <!-- Divider-->
                <hr>
            @endforeach



                <!-- Post preview-->

                <!-- Pager-->

            </div>
        </div>
    </div>
@endsection
