@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Création d'un article</div>
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
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <label for="title">Thumbnail</label>
                            <input value="{{ old('thumbnail') }}" placeholder="thumbnail" name="thumbnail" type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="title">Titre</label>
                            <input value="{{ old('title') }}" placeholder="Titre" name="title" type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="title">Slug</label>
                            <input value="{{ old('slug') }}" placeholder="slug" name="slug" type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="title">Résumé</label>
                            <input value="{{ old('summary') }}" placeholder="Résumé" name="summary" type="text" class="form-control">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="content">Contenu</label><br>
                            <textarea class="form-control" placeholder="Contenu" name="content" id="content" style="width:100%" rows="5">
                            {{ old('content') }}
                            </textarea>
                        </div>
                        <br>
                        <input class="btn-block btn-primary btn" type="submit" value="Envoyer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection