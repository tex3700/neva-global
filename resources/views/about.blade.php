@extends('layouts.app')

@section('title', 'О нас — Клининговая компания')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Главная <i class="fa fa-chevron-right"></i></a></span> <span>О нас <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">О нас</h1>
      </div>
    </div>
  </div>
</section>

@include('partials.welcome_cleaning')

<div class="m-5"></div>

@include('partials.our_team')

<!--@include('partials.testimonials')-->

@include('partials.video_section')

@endsection
