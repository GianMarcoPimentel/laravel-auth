@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>I miei progetti</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome del Progetto</th>
            <th scope="col"></th>
            
          </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                
                <tr>

                <td>Progetto nº {{$post->id}}</td>
                <td><a href="{{ route('admin.posts.edit', $post->id )}}" class="btn btn-light ">Modifica Progetto</a></td>
                <td><a href="{{ route('admin.posts.show', $post->id )}}" class="btn btn-danger  ">Elimina Progetto</a></td>
                
                
                </tr>

            @endforeach

        </tbody>
      </table>

      
</div>
@endsection