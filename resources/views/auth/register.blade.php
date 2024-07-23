<x-layout>
<x-slot:heading>
   Register 
</x-slot>

    
  
<form method="POST" action="{{ route('register.store')}}">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Register</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
         <x-form-field>
               <x-form-label for="first_name">First Name</x-form-label>
              <div class="mt-2">
              <x-form-input name="first_name" id="title" autocomplete="first_name"></x-form-input>

              <x-form-error name="first_name"></x-form-error>
              </div>
        </x-form-field>

        <x-form-field>
               <x-form-label for="last_name">Last Name</x-form-label>
              <div class="mt-2">
              <x-form-input name="last_name" id="title" autocomplete="last_name"></x-form-input>

              <x-form-error name="last_name"></x-form-error>
              </div>
        </x-form-field>
         
        <x-form-field>
               <x-form-label for="email">Email</x-form-label>
              <div class="mt-2">
              <x-form-input name="email" id="email" autocomplete="Email" type="email"></x-form-input>

              <x-form-error name="email"></x-form-error>
              </div>
        </x-form-field>

      

  

       <x-form-field>

        <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
            <x-form-input name="password" type="password" id="password" autocomplete="Password" ></x-form-input>
                <x-form-error name="password"></x-form-error>
            </div>
       </x-form-field>

       <x-form-field>
       <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <div class="mt-2">
            <x-form-input name="password_confirmation" type="password" id="password_confirmation" autocomplete="Confirm Password"></x-form-input>
                <x-form-error name="password_confirmation"></x-form-error>
            </div>
       </x-form-field>
        


      
      </div>
    </div>

 

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-button type="submit">Save</x-button>
    <!-- <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button> -->
  </div>
</form>

</x-layout>