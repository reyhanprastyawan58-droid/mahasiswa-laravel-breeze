@php
    $m = $mahasiswa ?? null;
@endphp

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
        <x-input-label for="nim" value="NIM" />
        <x-text-input id="nim" name="nim" type="text" class="mt-1 block w-full"
                       value="{{ old('nim', $m->nim ?? '') }}" required />
        <x-input-error :messages="$errors->get('nim')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="nama_mahasiswa" value="Nama Mahasiswa" />
        <x-text-input id="nama_mahasiswa" name="nama_mahasiswa" type="text" class="mt-1 block w-full"
                       value="{{ old('nama_mahasiswa', $m->nama_mahasiswa ?? '') }}" required />
        <x-input-error :messages="$errors->get('nama_mahasiswa')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="tempat_lahir" value="Tempat Lahir" />
        <x-text-input id="tempat_lahir" name="tempat_lahir" type="text" class="mt-1 block w-full"
                       value="{{ old('tempat_lahir', $m->tempat_lahir ?? '') }}" required />
        <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="tanggal_lahir" value="Tanggal Lahir" />
        <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="mt-1 block w-full"
                       value="{{ old('tanggal_lahir', isset($m->tanggal_lahir) ? $m->tanggal_lahir->format('Y-m-d') : '') }}" required />
        <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="jenis_kelamin" value="Jenis Kelamin" />
        <select id="jenis_kelamin" name="jenis_kelamin"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            <option value="">-- Pilih --</option>
            <option value="L" {{ old('jenis_kelamin', $m->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('jenis_kelamin', $m->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="program_studi" value="Program Studi" />
        <x-text-input id="program_studi" name="program_studi" type="text" class="mt-1 block w-full"
                       value="{{ old('program_studi', $m->program_studi ?? '') }}" required />
        <x-input-error :messages="$errors->get('program_studi')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="no_hp" value="Nomor HP" />
        <x-text-input id="no_hp" name="no_hp" type="text" class="mt-1 block w-full"
                       value="{{ old('no_hp', $m->no_hp ?? '') }}" required />
        <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="email" value="Email" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                       value="{{ old('email', $m->email ?? '') }}" required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="md:col-span-2">
        <x-input-label for="alamat" value="Alamat" />
        <textarea id="alamat" name="alamat" rows="3"
                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ old('alamat', $m->alamat ?? '') }}</textarea>
        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
    </div>
</div>