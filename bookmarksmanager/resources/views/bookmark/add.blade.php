@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row jumbotron">
        <form method="post" class="col-8 mx-auto" action="{{url('/add/bookmark')}}">
            <h3 class="mx-auto py-3">Ajouter un site dans mes Favoris</h3>
            @csrf
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control form-control-lg" id="name" name="name"/>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="url" class="form-control form-control-lg" id="url" name="url"/>
            </div>
            <div class="form-group">
                <label for="url">Type:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="public" value="Public" checked>
                    <label class="form-check-label" for="public">Public</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="private" value="Private">
                    <label class="form-check-label" for="private">Privé</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter dans mes Favoris</button>
        </form>
    </div>
</div>
@endsection