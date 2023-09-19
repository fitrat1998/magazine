@extends('base.web')

@section('title', __('home.experts'))
@section('description',  __('home.journal_name'))
@section('og_image', '')

@section('body')
    <!-- Content -->
    <div class="py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}" class="text-success">
                            <i class="bi bi-house"></i> {{ __('home.home') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('home.experts') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr class="m-0">


    <!-- Team members section-->
    <section class="py-5 bg-white">
        <div class="container2 my-5">
            <div class="text-center">
                <h2 class="fw-bold text-body">{{ __('home.experts') }}</h2>
                <br><br>
            </div>
             
          

     <section>
    <div class="container">
        <div class="carousel">
            <input type="radio" name="slides" checked="checked" id="slide-1">
            <input type="radio" name="slides" id="slide-2">
            <input type="radio" name="slides" id="slide-3">
            <input type="radio" name="slides" id="slide-4">
            <input type="radio" name="slides" id="slide-5">
            <input type="radio" name="slides" id="slide-6">
            <ul class="carousel__slides">
                @foreach($experts as $expert)
                <li class="carousel__slide">
                    <figure>
                        <div>
                            @if($expert->image)
                            <img src="{{ asset('images/experts/' . $expert->image) }}" alt="">
                            @else
                            <img src="{{ asset('images/experts/default-expert.png') }}" alt="">
                            @endif
                        </div>
                        <figcaption>
                            <h3 class="credit"><i class="bi bi-person"></i><br>{{ $expert->fio}}</h3>
                            <h3 class="credit"><i class="bi bi-buildings"></i><br>{{ $expert->ishjoyi}}</h3>
                            <h3 class="credit"><i class="bi bi-book"></i><br>{{ $expert->lavozim}}</h3>
                        </figcaption>
                    </figure>
                </li>
               @endforeach
            </ul>    
            <ul class="carousel__thumbnails">
                @foreach($experts as $expert)
                <li>
                    <label for="slide-{{ $expert->id}}">@if($expert->image)
                            <img src="{{ asset('images/experts/' . $expert->image) }}" alt="">
                            @else
                            <img src="{{ asset('images/experts/default-expert.png') }}" alt="">
                            @endif
                    </label>
                </li>
               @endforeach

            </ul>

        </div>
    </div>
</section>
           
        </div>
    </section>

@endsection
<!-- <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                @foreach($experts as $expert)
                    <div class="col mb-5 mb-5 mb-xl-0 ">
                        <div class="text-center bg-white shadow">
                            <img class="img-fluid rounded-1 mt-2 mb-4 px-4" width="200" height="250px" src="{{ asset('images/experts/' . $expert->image) }}" alt="..." />
                            <h5 class="fw-bold text-body">{{ $expert->fio }}</h5>
                            <div class="text-muted">{{ $expert->ishjoyi }} , {{ $expert->lavozim }}</div>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div> -->