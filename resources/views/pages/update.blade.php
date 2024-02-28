@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>EDIT PROJECT</h1>
    @if ($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('project.update', $project -> id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{$project -> name}}">
        <br>
        <label for="description">description</label>
        <input type="text" name="desc" id="desc" cols="30" rows="10" value="{{$project -> description}}"></input>
        <br>
        <input type="submit" value="UPDATE">
    </form>
@endsection
