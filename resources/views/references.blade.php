@extends('layouts.app')

@section('content')
    <h1 class="text-grey-darkest">Referencias</h1>
    <div class="my-8 p-4 bg-white rounded">
        @foreach ($references as $reference)
            <div class="py-4 text-lg">
                <strong>{{ $reference->title }}:</strong> <a class="no-underline" href="{{ $reference->link }}">{{ $reference->link }}</a>
            </div>
        @endforeach
    </div>
@endsection
