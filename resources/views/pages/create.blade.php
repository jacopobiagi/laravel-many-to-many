@extends('layouts.main-layout')
@section('head')
    <title>create</title>
@endsection
@section('content')
    <h1>NEW COMIC</h1>
    <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label for="title">name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="description">description</label>
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <br>
        <label for="image">image</label>
        <input type="file" name="image" id=image>
        <br>
        <input type="submit" value="CREATE">
    </form>
@endsection
