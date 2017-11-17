@extends('layouts.app')

@section('content')
    <div>
        <h1 class="mt-0 text-grey-darkest">{{ $slide->title }}</h1>
    </div>
    <div class="my-4">
        <img src="https://unsplash.it/1280/720" class="w-full" alt="{{ $slide->title }}" title="">
    </div>
    <div class="rounded-sm overflow-hidden shadow-md">
        @if (! $slide->content)
            <div class="bg-white px-4 py-8 text-center">
                <h1 class="text-grey-darkest">
                    Show me examples <i class="fa fa-thumbs-up text-indigo"></i>
                </h1>
            </div>
        @else
            <div class="bg-white px-4 py-8 text-center">
                <h1>Content</h1>
            </div>
        @endif
    </div>

    @if ($slide->link)
        <div class="my-8 text-center">
            <a class="no-underline bg-indigo-dark text-white hover:bg-indigo-darker py-3 px-6 text-xl rounded" href="{{ route($slide->link) }}">Vamos ver mais</a>
        </div>
    @endif
@endsection
