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
          <table class="w-full">
            <tr class="flex w-full justify-between ">
              <th>Id</th>
              <th>Username</th>
              <th>First name</th>
              <th>Last name</th>
              <th>User type</th>
            </tr>
            <tr class="flex w-full justify-between ">
                <td>{{$user['id']}}</td>
                <td>{{$user['username']}}</td>
                <td>{{$user['first_name']}}</td>
                <td>{{$user['last_name']}}</td>
                <td>{{$user['role']}}</td>
              </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
