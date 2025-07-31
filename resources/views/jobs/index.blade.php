<x-layout>
    <h1>Available Jobs</h1>
    <!-- @if(!empty($jobs)) -->
        <p>Available jobs:</p>
    <!-- <ul>
        @foreach($jobs as $job)
        <li>
            {{ $job }}
        </li>
        @endforeach
    </ul>
    @else
        <p>No jobs available at the moment.</p>
    @endif -->



    <ul>
        @forelse($jobs as $job)
        <li>{{$loop->index}} - {{ $job }}</li>
        @empty
            <p>No jobs available at the moment.</p>
        @endforelse
    </ul>

</x-layout>