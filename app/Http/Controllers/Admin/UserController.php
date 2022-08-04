<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Kontributor;
use App\Models\Lokasi;

use Alert;

class UserController extends Controller
{

    public function index()
    {
        // $users = User::where('id', '!=', auth()->user()->id)->get();
        $users = User::where('role', '!=', 'superAdmin')->where('id', '!=', auth()->user()->id)->get();
        $kontributor = Kontributor::all();
        
        return view('admin.user.index', compact('users', 'kontributor'));
    }

    public function add()
    {
        $lokasi = Lokasi::all();

        return view('admin.user.add', compact('lokasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|min:4'
        ]);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        Alert::success('Berhasil', 'User berhasil ditambah');

        return redirect()->route('admin.user.index');
    }

    public function edit($userId)
    {
        $user = User::findOrFail($userId);
        $lokasi = Lokasi::all();

        return view('admin.user.edit', compact('user', 'lokasi'));
    }

    public function update(Request $request, $userId)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required',
        ]);

        $user = User::findOrFail($userId);

        if( $request->password ) {
            $request->validate([
                'password' => 'min:4'
            ]);

            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password)
            ]);
        }else {
            $user->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'role' => $request->role,
            ]);
        }

        Alert::success('Berhasil', 'User berhasil diedit');
        
        return redirect()->route('admin.user.index');
    }

    public function action($userId)
    {
        $user = User::findOrFail($userId);
        if( $user->is_active ) {
            $user->update([
                'is_active' => 0
            ]);
            $message = 'non aktifkan';
        } else {
            $user->update([
                'is_active' => 1
            ]);
            $message = 'aktifkan';
        }
        
        Alert::success('Berhasil', 'User berhasil di ' . $message);
        
        return redirect()->route('admin.user.index');
    }
}
