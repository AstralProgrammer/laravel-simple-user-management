<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Users') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="row">
            <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                <h2>Edit User</h2>
              </div>
              <div class="pull-right">
                <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
              </div>
            </div>
          </div>


          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors"/>

          <form method="POST" action="{{route('users.update',['user' => $user['id']])}}">
            @csrf
            {{ method_field('PUT') }}

            <div>
              <x-label for="first_name" :value="__('First Name')"/>

              <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                       :value="$user['first_name']"
                       required autofocus/>
            </div>

            <div class="mt-4">
              <x-label for="last_name" :value="__('Last Name')"/>

              <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$user['last_name']"
                       required/>
            </div>

            <div class="mt-4">

              <x-label for="role" :value="__('Role')"/>
              <select id="role"
                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                      name="role" :value="$user['role']" required>
                <option value="staff" @if($user['role'] === 'staff')selected="selected"@endif>Staff</option>
                <option value="admin" @if($user['role'] === 'admin')selected="selected"@endif>Admin</option>
              </select>
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-button class="ml-4">
                {{ __('Update') }}
              </x-button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
