@extends('front.layout.main_layout')
@section('app_content')
    <header class="masthead" style="background-image: url('{{ asset($article->image) }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        <h2 class="subheading">{{ $article->category->title }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#!">{{ $article->user->name }}</a>
                            on {{ $article->created_at->format('d.m.Y') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!! $article->long_description !!}
                </div>
            </div>
        </div>
    </article>
    <hr>
    <!--comment Form-->
    @if(Auth::check())
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Please share your comments with us. Your comments will be published after the approval process.</p>
                    <div class="my-5">

                        <form action="{{ route('admin.comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <div class="form-floating">
                                <input class="form-control" name="title" type="text" placeholder="Comment Title..." />
                                <label for="name">Title</label>

                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" name="description" placeholder="Enter your message here..." style="height: 12rem" ></textarea>
                                <label for="message">Message</label>

                            </div>
                            <br />



                            <!-- Submit Button-->
                            <button class="btn btn-primary " type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @else
    <h5 class="d-flex justify-content-center">Please login to comment</h5>
    @endif
    <!-- Comments show-->
    @foreach ($article->commentsOk as $comment)
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>{{$comment->title}}</p>
                    <p>{{$comment->description}}</p>
                    <p>Posted by {{$comment->user->name}} on {{$comment->created_at->format('d','m','y')}}</p>
                </div>
            </div>
        </div>
    </article>
    <hr>
    @endforeach



@endsection
