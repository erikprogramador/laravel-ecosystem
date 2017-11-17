<div class="mt-4 bg-white rounded overflow-hidden shadow-md">
    @foreach ($topics->slice(1) as $topic)
        @if (isset($slide) && $topic->slug === $slide->slug)
            <a href="{{ route('topic', $topic) }}" class="block p-4 bg-indigo border-b border-indigo-lighest no-underline text-white">
                <div class="flex justify-between">
                    {{ $topic->title }}
                    <span>{{ $topic->time }}</span>
                </div>
           </a>
        @else
            <a href="{{ route('topic', $topic) }}" class="block p-4 border-b border-indigo-lighest no-underline text-grey-dark hover:text-grey-darkest">
                <div class="flex justify-between">
                    {{ $topic->title }}
                    <span>{{ $topic->time }}</span>
                </div>
            </a>
        @endif
    @endforeach
</div>
