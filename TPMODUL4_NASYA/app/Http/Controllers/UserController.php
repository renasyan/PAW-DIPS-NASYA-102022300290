<?php

// HINT : Tambahkan method index, create, store, edit, update dan destroy pada UserController

namespace App\Http\Controllers;

// 1. Import model User

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // 2. tampilkan daftar semua pengguna dari tabel users menggunakan compact
    public function index() {
        // isi disini
        $users = User::All();
        return view('users.index', compact('users') );
    }

    // 3. tampilkan form untuk menambah pengguna baru
    public function create() {
        // isi disini
        return view('users.create');
    }

    // 4. simpan pengguna baru ke dalam tabel users
    public function store(Request $request) {
        $request->validate([
            // isi disini
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
            
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // 5. tampilkan form untuk mengedit pengguna yang sudah ada
    public function edit(User $user) {
        // isi disini
        return view('users.edit', compact('user'));

    }

    // 6. simpan perubahan pengguna ke dalam tabel users
    public function update(Request $request, User $user) {
        // $user = User::findOrFail($id);
        $request->validate([
            // isi disini
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // 7. hapus pengguna dari tabel users
    public function destroy(User $user) {
        // isi disini
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
