@extends('layouts.app')

@section('content')
    <div class="text-center">
        <img src="{{ asset('images/avatar.jpeg') }}" class="rounded w-1/3" alt="{{ $author->name }}" title="{{ $author->name }}"/>
        <div class="mt-4">
            <h1 class="text-grey-darkest">{{ $author->name }}</h1>
            <div class="mt-2 text-grey-darker">
                <a class="no-underline bg-grey-light py-1 px-3 text-md text-grey-darkest hover:bg-grey hover:text-white inline-block mx-2" href="{{ $author->twitter }}">
                    <i class="fa fa-twitter"></i>
                    {{ $author->twitter_tag }}
                </a>
                <a class="no-underline bg-grey-light py-1 px-3 text-md text-grey-darkest hover:bg-grey hover:text-white inline-block mx-2" href="{{ $author->github }}">
                    <i class="fa fa-github"></i>
                    {{ $author->github_tag }}
                </a>
            </div>
        </div>
    </div>

    <div class="-mx-4 mt-8">
        <div class="flex">
            @foreach ($author->projects as $project)
                <div class="w-1/2 mx-4 bg-white shadow-md p-4">
                    <h2>
                        <a class="no-underline text-grey-darkest" href="{{ $project->link }}">
                            {{ $project->name }}
                        </a>
                        <small class="ml-2 text-grey-darkest">({{ $project->company }})</small>
                    </h2>
                    <div class="mt-4 text-grey-darkest leading-normal">{!! $project->description !!}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
