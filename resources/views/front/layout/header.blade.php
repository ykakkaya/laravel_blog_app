<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('home.index')}}">ykakkaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('home') }}">Home</a></li>
                {{-- <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li> --}}



                @php
                    use Illuminate\Support\Facades\Auth;
                @endphp

                @if (Auth::check())
                    <li class="nav-item">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="{{ route('admin.article.index') }}">HELLO {{ auth()->user()->name }}</a></li>
                    <form action="{{ route('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button type="submit" class="btn btn-warning text-white">Logout</button>
                    </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">LOGIN</a>
                    </li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                            href="{{ route('register') }}">REGISTER</a></li>
                @endif





            </ul>
        </div>
    </div>
</nav>
