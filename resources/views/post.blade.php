<x-layout>
    <x-slot name="content">

        <article> 
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}"> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
             <p>
                 {!! $post->body !!}
                 <!-- !! Pour échapper !! (attention, même en commentaire il comprend les accolades) -->
             </p>
        </article>  
        <a href="/">Retour</a>

    </x-slot>
</x-layout>