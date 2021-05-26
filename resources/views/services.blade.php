@extends('layouts.master')

@section('content')

    @include('includes.header')
    <div class="carousel slide" style="margin-top: 0px">
        <div class="carousel-item carousel-item-next carousel-item-left">
            <img src="{{ asset('front/img/carousel-3.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Commander un service</p>
            </div>
        </div>
    </div>
    @include('includes.service')
@endsection