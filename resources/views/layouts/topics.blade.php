<div class="mt-4 bg-white rounded overflow-hidden shadow-md">
    <a href="topic" class="block p-4 bg-indigo border-b border-indigo-lighest no-underline text-white">{{ $topics[0]->title }}</a>
    @foreach ($topics->slice(1) as $topic)
        <a href="topic" class="block p-4 border-b border-indigo-lighest no-underline text-grey-dark hover:text-grey-darkest">{{ $topic->title }}</a>
    @endforeach
</div>
