<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-end mb-4">
                    <a href="{{ route('mahasiswa.create') }}"
                       class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                        + Tambah Mahasiswa
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left">NIM</th>
                                <th class="px-4 py-2 text-left">Nama</th>
                                <th class="px-4 py-2 text-left">Tempat, Tgl Lahir</th>
                                <th class="px-4 py-2 text-left">Jenis Kelamin</th>
                                <th class="px-4 py-2 text-left">Program Studi</th>
                                <th class="px-4 py-2 text-left">No. HP</th>
                                <th class="px-4 py-2 text-left">Email</th>
                                <th class="px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse ($mahasiswas as $mhs)
                                <tr>
                                    <td class="px-4 py-2">{{ $mhs->nim }}</td>
                                    <td class="px-4 py-2">{{ $mhs->nama_mahasiswa }}</td>
                                    <td class="px-4 py-2">
                                        {{ $mhs->tempat_lahir }}, {{ $mhs->tanggal_lahir->format('d-m-Y') }}
                                    </td>
                                    <td class="px-4 py-2">{{ $mhs->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                    <td class="px-4 py-2">{{ $mhs->program_studi }}</td>
                                    <td class="px-4 py-2">{{ $mhs->no_hp }}</td>
                                    <td class="px-4 py-2">{{ $mhs->email }}</td>
                                    <td class="px-4 py-2 text-center whitespace-nowrap">
                                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                           class="text-blue-600 hover:underline">Detail/Edit</a>
                                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                              method="POST" class="inline"
                                              onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline ml-2">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-gray-500">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $mahasiswas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>