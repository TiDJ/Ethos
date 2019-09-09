@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center backcolor">
        <div class="col-md-8">
            <h1>ACTUALITÉ MEMBRES</h1>
            <hr>

            @foreach($posts as $post)
            <div class=" borderpost row">
                <div class="col-sm-12 col-lg-4">
                    <img style="max-width:100%" src="{{$post->thumbnail}}">
                </div>
                <div class="col-sm-12 col-lg-8">
                    <a href="{{ route('posts.article', ['slug'=> $post->slug ])}}">
                        <h2>{{$post->title}}</h2>
                    </a><br>

                    {{$post->created_at->diffForHumans()}}
                    <br>
                    {{$post->summary}} <br>


                </div>
            </div>
            <br>
            @endforeach

        </div>
    </div>
</div>
@endsection