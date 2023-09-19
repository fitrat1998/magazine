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
             <div class="itc-slider" data-autoplay="false" data-interval="5000" data-loop="true" data-refresh="true"
               data-slider="itc-slider">
            <div class="itc-slider__wrapper">
              <div class="itc-slider__items">
                    @foreach($experts as $expert)
                <div class="itc-slider__item"><!-- Начало 1 слайда -->
                  <div class="card">
                    <header class="card__header">
                       <img class="card__img"  src="{{ asset('images/experts/' . $expert->image) }}" alt="..." />
                      <span class="card__section">Совет эксперта</span>
                    </header>
                    <h2 class="card__title">{{ $expert->fio }}</h2>
                    <footer class="card__footer">
                      <img alt="" class="card__photo m-" src="{{ asset('images/experts/' . $expert->image) }}">
                      <span class="card__author">{{ $expert->fio }}</span>
                      <svg class="card__icon">
                        <i class="bi bi-file-person"></i>
                      </svg>
                      <span class="card__views">{{ $expert->lavozim }}</span>
                    </footer>
                  </div>
                </div> <!-- Конец 1 слайда -->
                  @endforeach
               
    <ol class="itc-slider__indicators">
      <li class="itc-slider__indicator" data-slide-to="0"></li>
      <li class="itc-slider__indicator" data-slide-to="1"></li>
      <li class="itc-slider__indicator" data-slide-to="2"></li>
      <li class="itc-slider__indicator" data-slide-to="3"></li>
      <li class="itc-slider__indicator" data-slide-to="4"></li>
      <li class="itc-slider__indicator" data-slide-to="5"></li>
      <li class="itc-slider__indicator" data-slide-to="6"></li>
    </ol>
  </div>
      <button class="itc-slider__btn itc-slider__btn_prev"></button>
      <button class="itc-slider__btn itc-slider__btn_next"></button>
    </div>
           
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