<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/siswa" class="flex flex-col gap-8">
                        <label for="number">id</label>
                        <input type="number">

                        <label for="text">nama</label>
                        <input type="text">

                        <label for="text">alamat</label>
                        <input type="text" name="" id="">

                        <label for="number">Nomor Telepon</label>
                        <input type="number" name="" id="">

                        <label for="date">tanggal lahir</label>
                        <input type="date">

                        <label for="foto">foto</label>
                        <input type="file" name="" id="">

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
