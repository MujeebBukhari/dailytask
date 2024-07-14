<x-layout>
<x-slot:heading>
    Job  Page
</x-slot>

    <h2 class="font-bold">{{$job['title']}}</h2>
    <p>
        This Job pays {{$job['salary']}}
    </p>
</x-layout>