@extends('layouts.master')

@section('content')

    @include('includes.header')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Page de commande</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="contact wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <div class="section-header text-center">
                <p>Commander service</p>
                <h4>Remplir la formulaire pour envoyer ton commande</h4>
            </div>
            <div class="row">
                
                <div class="col-md-6 offset-md-3">
                    <div class="contact-form">
                        <div id="success"></div>
                        
                        
                        <form  action="{{ url('commandes_voiture/'.$commande->id) }}" name="sentMessage" id="contactForm" novalidate="novalidate" method='post'>
                            @csrf
                            @method('put')
                            <div class="control-group mb-2">
                                <select name="type_lavage" id="">
                                    <option value="" selected disabled>Choisir type de lavage</option>
                                    <option value="intérieur" @if($commande->type_lavage == "intérieur") selected @endif>Intérieur</option>
                                    <option value="extérieur" @if($commande->type_lavage == "extérieur") selected @endif>Extérieur</option>
                                </select>
                                @error('type_lavage')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <select name="type_voiture" id="">
                                    <option value="" selected disabled>Choisir type de voiture</option>
                                    <option value="familiale"  @if($commande->type_voiture == "familiale") selected @endif>Familiale</option>
                                    <option value="commerciale"  @if($commande->type_voiture == "commerciale") selected @endif>Commerciale</option>
                                </select>
                                @error('type_voiture')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control" placeholder="Adresse" value="{{ $commande->adresse }}" required="required" name="adresse">
                                @error('adresse')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                           
                            <div class="control-group mb-2">
                                <input type="date" class="form-control" placeholder="Numéro étage" value="{{ $commande->date }}"  required="required" name="date">
                                @error('date')
                                <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn" type="submit" id="sendMessageButton">Commander</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection