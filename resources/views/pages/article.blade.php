@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center backcolor">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <hr>
            {!! $post->content !!} <br>
            {{$post->created_at->diffForHumans()}}

        </div>
    </div>
    <br>
    <!-- Bloc des commentaires -->
    <div class="row justify-content-center backcolor">
        <div class="col-md-8">
            <h1>Liste des commentaires</h1>
            @foreach($post->comments as $comment)
            <div class="media text-muted pt-3">

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">
                        <span style="color:#4256eb;">
                            @ {{ $comment->user->name }}
                            ({{ $comment->user->main_name }}, {{ $comment->user->main_role }} {{ $comment->user->main_class }})
                            @if($comment->user->reroll_name)
                            ({{ $comment->user->reroll_name }}, {{ $comment->user->reroll_role }} {{ $comment->user->reroll_class }})
                            @endif
                        </span>
                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                    </strong>
                    {{ $comment->content }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    <br>
    <div class="row justify-content-center backcolor">
        <div class="col-md-12">
            <h1>Ajouter un commentaire</h1>

            @guest
            Vous devez être connecté pour ajouter un commentaire à cet article
            @else
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="col-md-12 mb-3">
                    <label for="content">Contenu</label><br>
                    <textarea placeholder="Mon commentaire" name="content" style="width:100%" rows="5">{{ old('content') }}</textarea>
                </div>
                <br>
                <input class="btn-block btn-primary btn" type="submit" value="Ajouter mon commentaire">
            </form>
            @endguest

        </div>
    </div>



</div>
</div>
@endsection