<?php

// HINT : Tambahkan method index, create, store, edit, update dan destroy pada UserController

namespace App\Http\Controllers;

// 1. Import model User

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
    // 2. tampilkan daftar semua pengguna dari tabel users menggunakan compact
    public function index() {
        // isi disini
        $user = User::All();
        return view('users.index', compact('user') );
    }

    // 3. tampilkan form untuk menambah pengguna baru
    public function create() {
        // isi disini
    }

    // 4. simpan pengguna baru ke dalam tabel users
    public function store(Request $request) {
        $request->validate([
            // isi disini
            
            
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // 5. tampilkan form untuk mengedit pengguna yang sudah ada
    public function edit($id) {
        // isi disini
    }

    // 6. simpan perubahan pengguna ke dalam tabel users
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $request->validate([
            // isi disini
            
            
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // 7. hapus pengguna dari tabel users
    public function destroy($id) {
        // isi disini

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
