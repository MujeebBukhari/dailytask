<x-layout>
<x-slot:heading>
    Job  Page
</x-slot>

    <h2 class="font-bold">{{$job['title']}}</h2>
    <p>
        This Job pays {{$job['salary']}}
    </p>

    @Can('edit', $job)
        <a href="/jobs/{{$job->id}}/edit" class="relative inline-flex items-center mt-4 px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 ">Edit Job</a>
    @endcan

</x-layout>