@extends('layouts.app')

@section('content')
    <h3>Upload Photo</h3>
    <div>
        <form action="{{route('photo_store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <label>
                <input type="text" name="title" placeholder="Title">
            </label>
            <label >
                <textarea name="description" cols="20" rows="10" placeholder="Photo Description"></textarea>
            </label>
            <label>
                <input type="file" name="photo">
            </label>
            <label>
                <input type="hidden" name="album_id" value="{{$album_id}}">
            </label>
                <input type="submit" value="Submit" class="button">
        </form>
    </div>
@endsection