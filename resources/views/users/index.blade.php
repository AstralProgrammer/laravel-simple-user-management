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
          <a class="underline text-sm text-gray-600 hover:text-gray-900 float-right mb-5" href="{{ route('users.create') }}">
            {{ __('Register user') }}
          </a>
          <table class="w-full">
            <tr class="flex w-full justify-between ">
              <th class="w-2/12">Id</th>
              <th class="w-2/12">Username</th>
              <th class="w-2/12">First name</th>
              <th class="w-2/12">Last name</th>
              <th class="w-2/12">User type</th>
              <th class="w-2/12">Actions</th>
            </tr>
            @foreach ($users as $user)
              <tr class="flex w-full justify-between text-center">
                <td class="w-2/12">{{$user['id']}}</td>
                <td class="w-2/12">{{$user['username']}}</td>
                <td class="w-2/12">{{$user['first_name']}}</td>
                <td class="w-2/12">{{$user['last_name']}}</td>
                <td class="w-2/12">{{$user['role']}}</td>
                <td class="w-2/12">
                  <form action="{{route('users.destroy', ['user' => $user['id']])}}" method="POST">
                    <a href="{{route('users.edit', ['user' => $user['id']])}}">
                      {{ __('edit') }}
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" title="delete" class="transparent border-0">
                      {{ __('delete') }}
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
