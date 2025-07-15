<x-layout>
    <h1 class="text-2xl font-bold mb-4">All jobs!</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs Available</p>
        @endforelse
    </div>
</x-layout>