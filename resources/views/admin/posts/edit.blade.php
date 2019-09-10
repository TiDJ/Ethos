@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Modification d'un article</div>
                <div class="card-body">

                    <!-- Errors -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Formulaire -->
                    <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
                        @method('PUT')
                        <!-- Ajoute <input type=hidden value=PUT -->
                        @csrf
                        <!-- Ajoute <input type=hidden value=XXXXX -->
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="title">thumbnail</label>
                                <input value="@if(old('thumbnail')) {{old('thumbnail')}} @else {{ $post->thumbnail }} @endif" placeholder="thumbnail" name="thumbnail" type="text" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="title">Titre</label>
                                <input value="@if(old('title')) {{old('title')}} @else {{ $post->title }} @endif" placeholder="Titre" name="title" type="text" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="title">Slug</label>
                                <input value="@if(old('slug')) {{old('slug')}} @else {{ $post->slug }} @endif" placeholder="slug" name="slug" type="text" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="title">Date de Création</label>
                                <input value="@if(old('created_at')) {{old('created_at')}} @else {{ $post->created_at }} @endif" placeholder="created_at" name="created_at" type="text" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="title">Résumé</label>
                                <input value="@if(old('summary')) {{old('summary')}} @else {{ $post->summary }} @endif" placeholder="summary" name="summary" type="text" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="content">Contenu</label><br>
                                <textarea placeholder="Contenu" name="content" id="content" style="width:100%" rows="5">@if(old('content')) {{old('content')}} @else {{ $post->content }} @endif</textarea>
                            </div>
                            <br>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-block btn-primary" value="Modifier l'article">
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-block btn-danger" href="{{ route('posts.index') }}">
                                            Retourner à la liste
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
