<x-layout>
    <h1 class="text-3xl font-bold mb-5">Available Jobs:</h1>
    <ul>
        @forelse($jobs as $job)
            <a href={{ route('jobs.show', $job->id) }}>
                <div class="flex items-center gap-4 mb-4 border border-black rounded-xl px-4 py-2 w-full bg-slate-300">
                    <img src="{{ $job->company_logo }}" />
                    <div class="flex flex-col">
                        <div class="text-md font-semibold">{{ $job->title }}</div>
                        <div>{{ $job->description }}</div>
                    </div>
                </div>
            </a>
        @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</x-layout>
