<x-layout>
    <h1>Welcome. Available jobs!</h1>
    <ul>
        @forelse ($jobs as $job)
            <li><a href="{{route('jobs.show', $job->id)}}">{{$job->title}} - {{$job->description}}</a></li>
        @empty
            <li>No jobs Available</li>
        @endforelse
    </ul>
</x-layout>