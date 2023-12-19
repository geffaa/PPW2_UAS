<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buku Populer') }}
        </h2>
        <a href="{{ url('buku') }}" class="inline-block px-4 py-2 border border-blue-500 text-blue-500 bg-blue-100 rounded">
            {{ __('Kembali ke Buku') }}
        </a>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto">
        <div class="text-gray-900 dark:text-gray-100">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Buku</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Harga</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tgl. Terbit</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Rating</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach($buku_populer as $buku)
                            <tr class="hover:bg-gray-50">
                                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    @if($buku->filepath)
                                        <div class="relative h-24 w-24">
                                            <img
                                                class="h-full w-full object-cover object-center"
                                                src="{{ asset($buku->filepath) }}"
                                                alt=""
                                                style="padding-right: 20px;"
                                            />
                                        </div>
                                    @endif
                                    <div class="text-sm">
                                        <a href="{{ $buku->buku_seo ? route('galeri.buku', $buku->buku_seo) : '#' }}" class="font-medium text-gray-700">{{ $buku->judul }}</a>
                                        <div class="text-gray-400">{{ $buku->penulis }}</div>
                                    </div>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        Rp. {{ number_format($buku->harga, 0, ',', '.') }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('j F Y') }}</td>
                                <td class="px-6 py-4">
                                    {{ $buku->rating }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $buku_populer->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>