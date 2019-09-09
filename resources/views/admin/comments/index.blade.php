@extends('layouts.app')

@section('content')
<div class=" backpost container">

    <div class="row justify-content-center">
        <div class="col-md-12">

            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>TITRE</th>
                        <th>Date de création</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->created_at->diffForHumans() }}</td>
                    <td>
                        <form class="d-inline-block" action="{{ route('comments.destroy', ['id' => $comment->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <hr>
            {{ $comments->links() }}
        </div>
    </div>
</div>
@endsection