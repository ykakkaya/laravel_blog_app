
@extends('front.layout.main_layout')
@section('app_content')
<header class="masthead" style="background-image: url('{{asset('blog/assets/img/about-bg.jpg')}}')">
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
            <!-- Post preview-->
            @foreach ($articles as $article )
<div class="post-preview">
                <a href="{{route('home.post.show',$article->id)}}">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <h3 class="post-subtitle">{{$article->short_description}}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{$article->user->name}}</a>
                    on  {{$article->created_at->format('d-m-Y')}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach

            <!-- Post preview-->

            <!-- Pager-->

        </div>
    </div>
</div>
@endsection
