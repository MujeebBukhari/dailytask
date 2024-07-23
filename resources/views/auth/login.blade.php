<x-layout>
<x-slot:heading>
   Login
</x-slot>

    
  
<form method="POST">
    @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Log In</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
     

    
        <x-form-field>
               <x-form-label for="email">Email</x-form-label>
              <div class="mt-2">
              <x-form-input name="email" id="email" autocomplete="Email" :value="old('email')" type="email"></x-form-input>

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

      
   
        


      
      </div>
    </div>

 

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
    <x-button type="submit">Login</x-button>
    <!-- <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button> -->
  </div>
</form>

</x-layout>