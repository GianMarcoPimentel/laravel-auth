@extends('layouts.app')

@section('content')
<div class="container py-5">

    

    <h1>Progetto nº {{$post->id}}</h1>

    <div class="card" style="width: 100%;">
        <img src="{{$post->src}}" class="card-img-top" alt="Progetto : {{$post->id}}">
        <div class="card-body">
          <h5 class="card-title">Nome progetto: {{$post->name}}</h5>
          <p class="card-text">Di cosa tratta: {{$post->description}}</p>
          <p class="card-text">Tecnologie usate: {{$post->used_technologies}}</p>
          <p>Per visualizzare il progetto : <a href="#" class="btn btn-success">{{$post->link}}</a></p>
        </div>
      </div>
    </div>

    
@endsection