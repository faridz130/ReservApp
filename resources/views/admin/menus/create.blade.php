<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.menus.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Kembali</a>
            </div>
            <div class="m-2 p-6 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Nama </label>
                        <div class="mt-1">
                          <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="image" class="block text-sm font-medium text-gray-700"> Gambar </label>
                        <div class="mt-1">
                          <input type="file" id="image" name="image" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="price" class="block text-sm font-medium text-gray-700"> Harga </label>
                        <div class="mt-1">
                          <input type="number" min="0.00" max="100000.00" step="0.01" id="price" name="price" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('price')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <div class="mt-1">
                          <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <div class="mt-1">
                            <select multiple id="categories" name="categories[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('categories')
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
