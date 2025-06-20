<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', [
            'menu' => 'user',
            'title' => 'Data user',
            'user' => $user
        ]);
    }

    public function create()
 {
        return view('admin.user.create', [
            'menu' => 'user',
            'title' => 'Tambah Data user',
           
        ]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
        ], [

            'username.required' => 'Username Harus Diisi',
            'username.unique' => 'Username Sudah Terdaftar',
            'email.required' => 'Email Harus Diisi',
            'email.email' => 'Format Email Tidak Valid',
            'email.unique' => 'Email Sudah Terdaftar',
            'password.required' => 'Password Harus Diisi',
            'password.min' => 'Password Minimal 6 Karakter',
            'level.required' => 'Level Harus Diisi',
         
        ]);

        $user = new user;
        $user->username = $validasi['username'];
        $user->email = $validasi['email'];
        $user->password = bcrypt($validasi['password']);
        $user->level = $validasi['level'];
      
        $user->save();
        return redirect(route('user.index'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', [
            'menu' => 'user',
            'title' => 'Edit user',
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validasi = $request->validate([
            'username' => 'required|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6', // hanya jika diisi
            'level' => 'required',
        ], [
            'username.required' => 'Username Harus Diisi',
            'username.unique' => 'Username Sudah Terdaftar',
            'email.required' => 'Email Harus Diisi',
            'email.email' => 'Format Email Tidak Valid',
            'email.unique' => 'Email Sudah Terdaftar',
            'password.min' => 'Password Minimal 6 Karakter',
            'level.required' => 'Level Harus Diisi',
        ]);

        $user->username = $validasi['username'];
        $user->email = $validasi['email'];
        $user->level = $validasi['level'];

        // Update password jika diisi
        if (!empty($validasi['password'])) {
            $user->password = bcrypt($validasi['password']);
        }

        $user->save();
        return redirect(route('user.index'))->with('success', 'Data pengguna berhasil diperbarui.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.view', [
            'menu' => 'user',
            'title' => 'Detail Data User',
            'user' => $user
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('user.index'))->with('success', 'User berhasil dihapus');
    }
}
