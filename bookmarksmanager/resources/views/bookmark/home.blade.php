@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
   
    <div class="row jumbotron">
        <div class="mx-auto">
            <a href="{{url('/add/bookmark')}}" class="btn btn-success">Ajouter un site en Favoris</a>
            <a href="{{url('/bookmarks')}}" class="btn btn-primary">Tous mes Favoris</a>
        </div>
    </div>
</div>
@endsection