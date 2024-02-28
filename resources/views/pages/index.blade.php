@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>PROGETTI</h1>
    <h2><a href="{{route('project.create')}}">NEW</a></h2>
    <ul>
        @foreach ($projects as $project)
            <li>{{$project -> name}}</li>
            <a href="{{ route('project.edit', $project -> id) }}" class='mx-2'>EDIT</a>
        @endforeach
    </ul>
@endsection
