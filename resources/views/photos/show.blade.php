@extends('layouts.app')

@section('content')
    <h4>{{$photo->title}}</h4>
    <p>{{$photo->description}}</p>
    <a href="/albums/{{$photo->album_id}}" class="button">Back to Gallery</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
    <hr>
    <p>Size: {{$photo->size}}</p>
    <form action="/photos/{{$photo->id}}" method="post">
        @csrf
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete Photo" class="button alert">
    </form>

@endsection