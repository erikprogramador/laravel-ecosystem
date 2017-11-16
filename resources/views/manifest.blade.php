@extends('layouts.app')

@section('content')
    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md p-4">
            <div class="border-b border-indigo-lightest pb-2">
                <h1 class="font-normal">Manifesto</h1>
            </div>
            <div class="mt-4">
                @markdown($manifest)
            </div>
        </div>
    </div>
@endsection
