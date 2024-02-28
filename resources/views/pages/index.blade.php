@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>PROGETTI</h1>

    <ul>
        @foreach ($projects as $project)
            <li>{{$project -> name}}</li>
        @endforeach
    </ul>
@endsection
