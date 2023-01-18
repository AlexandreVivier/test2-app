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

    <x-slot name="comments">
        <table>
            <thead>
                <td><th colspan="3">Commentaires :</th></td>
                <tr>
                    <td><th>NOM :</th></td>
                    <td><th>COMMENTAIRE :</th></td>
                    <td><th>DATE :</th></td>
                </tr>
            </thead>
        @foreach ($comments as $comment)
            <tr>
                <td>{{ $comment->author->username }}</td>
                <td>{{ $comment->body }}</td>
                <td>{{ $comment->date }}</td>
            </tr>
        @endforeach
        </table>
    </x-slot>
</x-layout>