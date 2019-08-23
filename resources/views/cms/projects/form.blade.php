@extends('layout')

@section('title', 'Project Form')

@section('content')
    <h1>Projects Form</h1>

    <form method="POST" action="/cms/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" id="title" placeholder="title">
        </div>
        <div>
            <textarea name="description" id="description" placeholder="description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
    