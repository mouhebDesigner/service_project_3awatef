@extends('layouts.master')

@section('content')

    @include('includes.header')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Page de contacts</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="contact wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            @if(session('success'))
            <div class="section-header text-center alert-done">
                <h4>{{ session('success') }}</h4>
            </div>
            @endif
            <div class="section-header text-center">
                <p>Contactez-nous</p>
                <h4>Remplir la formulaire pour envoyer votre message</h4>
            </div>
            <div class="row">
                
                <div class="col-md-6 offset-md-3">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form  action="{{ url('contacts') }}" name="sentMessage" id="contactForm" novalidate="novalidate" method='post'>
                            @csrf
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" value="{{ old('nom') }}" placeholder="Nom" required="required"  name="nom">
                                @error('nom')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" value="{{ old('prenom') }}" placeholder="Prénom" required="required"  name="prenom">
                                @error('prenom')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" value="{{ old('numtel') }}" placeholder="Numéro de téléphone" required="required" name="numtel">
                                @error('numtel')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" value="{{ old('email') }}" placeholder="Email"  name="email">
                                @error('email')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" value="{{ old('sujet') }}" placeholder="Sujet" required="required"  name="sujet">
                                @error('sujet')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <textarea name="message" id="" cols="30" class="form-control" value="{{ old('message') }}" placeholder="Message" rows="5">{{ old('message') }}</textarea>
                                @error('message')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            
                            <div class="d-flex justify-content-center">
                                <button class="btn" type="submit" id="sendMessageButton">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection