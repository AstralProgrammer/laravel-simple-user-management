<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
      </a>
    </x-slot>

    <h2>{{__('Registration Form')}}</h2>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Username -->
      <div class="mt-4">
        <x-label for="username" :value="__('Username')"/>

        <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required/>
      </div>

      <!-- Name -->
      <div class="mt-4">
        <x-label for="first_name" :value="__('First Name')"/>

        <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')"
                 required autofocus/>
      </div>
      <div class="mt-4">
        <x-label for="last_name" :value="__('Last Name')"/>

        <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                 required/>
      </div>

      <!-- Role -->
      <div class="mt-4">
        <x-label for="role" :value="__('Role')"/>
        <select id="role"
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="role" name="role" :value="old('role')" required>
          <option value="staff">Staff</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-label for="password" :value="__('Password')"/>

        <x-input id="password" class="block mt-1 w-full"
                 type="password"
                 name="password"
                 required autocomplete="new-password"/>
      </div>

      <div class="flex items-center justify-end mt-4">
        <x-button class="ml-4">
          {{ __('Register') }}
        </x-button>
      </div>
    </form>
  </x-auth-card>
</x-guest-layout>
