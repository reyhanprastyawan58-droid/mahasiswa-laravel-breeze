<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('nama_mahasiswa')->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateData($request);
        Mahasiswa::create($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validated = $this->validateData($request, $mahasiswa->id);
        $mahasiswa->update($validated);

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }

    private function validateData(Request $request, $id = null): array
    {
        return $request->validate([
            'nim' => ['required', 'string', 'max:20', 'unique:mahasiswas,nim,' . $id],
            'nama_mahasiswa' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date', 'before:today'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'alamat' => ['required', 'string'],
            'program_studi' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:15', 'regex:/^[0-9+]+$/'],
            'email' => ['required', 'email', 'max:255', 'unique:mahasiswas,email,' . $id],
        ]);
    }
}