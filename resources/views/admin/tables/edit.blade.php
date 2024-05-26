<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.tables.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Kembali</a>
            </div>
            <div class="m-2 p-6 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.tables.update', $table->id) }}">
                        @csrf
                        @method('PUT')
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Nama </label>
                        <div class="mt-1">
                          <input type="text" id="name" name="name" value="{{ $table->name }}"
                          class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="guest_number" class="block text-sm font-medium text-gray-700"> Jumlah Orang </label>
                        <div class="mt-1">
                          <input type="number" id="guest_number" name="guest_number" value="{{ $table->guest_number }}"
                          class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                        <div class="mt-1">
                            <select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{$status->value}}" @selected($table->status->value == $status->value)>{{ $status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('status')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                        <div class="mt-1">
                            <select id="location" name="location"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{$location->value}}" @selected($table->location->value == $location->value)>{{ $location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('location')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mt-6 p-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Simpan</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</x-admin-layout>
