<x-layout>
    <x-slot name="content">

        <article> 
            <h1>
                {{ $post->title }}
            </h1>
            <p>
                <a href="#">{{ $post->category->name }}</a>
            </p>
             <p>
                 {!! $post->body !!}
                 <!-- !! Pour échapper !! (attention, même en commentaire il comprend les accolades) -->
             </p>
        </article>  
        <a href="/">Retour</a>

    </x-slot>
</x-layout>