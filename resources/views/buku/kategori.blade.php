<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kategori Buku
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-12">
            <div class="container mx-auto mt-10 bg-white p-6 rounded-md">
                <table>
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bukus as $buku)
                            <tr>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->kategori }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>