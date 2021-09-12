@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach($bookmarks as $bookmark)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$bookmark->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$bookmark->url}}</h6>
                <a href="{{action('BookmarkController@edit',$bookmark->id)}}" class="text-primary">Modifier</a>
                <form action="{{action('BookmarkController@destroy', $bookmark->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="text-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection