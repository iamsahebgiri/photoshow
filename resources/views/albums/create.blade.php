@extends('layouts.app')

@section('content')
    <h3>Create Album</h3>
    <div>
        <form action="{{route('album_store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <label>
                <input type="text" name="name" placeholder="Album Name">
            </label>
            <label >
                <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
            </label>
            <label>
                <input type="file" name="cover_image">
            </label>
            <label>
                <input type="submit" value="Submit" class="button">
            </label>
        </form>
    </div>
@endsection