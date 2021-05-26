@extends('layouts.master')

@section('content')

    @include('includes.header')
    <div class="carousel slide" style="margin-top: 0px">
        <div class="carousel-item carousel-item-next carousel-item-left">
            <img src="{{ asset('front/img/carousel-3.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Bienvenue a notre site web </p>
                <h1 class="animated fadeInLeft">Commander un service maintenant</h1>
                <a class="btn animated fadeInUp" href="{{ url('services') }}">Commander</a>
            </div>
        </div>
    </div>
    @include('includes.catalogue')
    @include('includes.service')
@endsection