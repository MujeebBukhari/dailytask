<x-layout>
<x-slot:heading>
    Edit Job: {{$job->title}}
</x-slot>

    
  
<form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-lg shadow-sm  sm:max-w-md">
              <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
              <input type="text" value="{{$job->title}}" name="title" id="title" autocomplete="title" class="block flex-1 border-0 bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Title">
            </div>

            @error("title")
                <p class="text-sm text-red-500 font-semibold mt-1">{{$message}}</p>
            @enderror
          </div>

        </div>

  

        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex rounded-lg shadow-sm  sm:max-w-md">
              <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
              <input type="text" value="{{$job->salary}}" name="salary" id="salary" autocomplete="salary" class="block flex-1 border-0 bg-transparent p-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$50,000">
            </div>
            @error("salary")
                <p class="text-sm text-red-500 font-semibold mt-1">{{$message}}</p>
            @enderror
          </div>
        </div>


      
      </div>
    </div>

 

  </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 font-bold text-sm">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">

                    <a href="/jobs/{{$job->id}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <div>
                      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>

                    </div>

            </div>
    </div>
</form>
<form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
   
    @csrf
    @method("DELETE")
</form>

</x-layout>