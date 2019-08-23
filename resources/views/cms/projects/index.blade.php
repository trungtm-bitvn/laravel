@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>

    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
    <div>
        <a href="/cms/projects/form">Form</a>
    </div>
@endsection
    