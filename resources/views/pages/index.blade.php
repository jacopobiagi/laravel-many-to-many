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
        @endforeach
    </ul>
@endsection
