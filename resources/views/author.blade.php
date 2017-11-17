@extends('layouts.app')

@section('content')
    <div>
        <img src="{{ asset('images/avatar.jpeg') }}" alt="{{ $author->name }}" title="{{ $author->name }}"/>
        <div>
            <h1>{{ $author->name }}</h1>
            <div>
                <span>{{ $author->twitter_tag }}</span>
                <span>{{ $author->github_tag }}</span>
            </div>
        </div>

        <div>
            <div>
                @foreach ($author->projects as $project)
                    <h2>
                        <a href="{{ $project->link }}">
                            {{ $project->name }}
                        </a>
                        <small>{{ $project->company }}</small>
                    </h2>
                    <div>{{ $project->description }}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
