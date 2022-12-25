@extends('layout')

    @section('content')
        <article> 
            <h1>
                {{ $post->title }}
            </h1>
             <p>
                 {!! $post->body !!}
                 <!-- !! Pour échapper !! (attention, même en commentaire il comprend les accolades) -->
             </p>
        </article>  
        <a href="/">Retour</a>
    @endsection
   
