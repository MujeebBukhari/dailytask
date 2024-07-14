<x-layout>
<x-slot:heading>
    Job  Page
</x-slot>

 @foreach($jobs as $job)
    <li> 
        <a href="/jobs/{{ $job['id']}}">
            <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per year
        </a>
    </li>
 @endforeach
</x-layout>