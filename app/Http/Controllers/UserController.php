<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('spv.user.view', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spv.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]);
        } catch (\Throwable $th) {
            // throw $th;
        }
        return redirect()->to(route('users.index'))->with('tambah-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('spv.user.ubah', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {   
        if ($request->password == NULL) {
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'role' => $request->role,
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);
        }
        return redirect()->to(route('users.index'))->with('tambah-success', 'Data Berhasil Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->to(route('users.index'))->with('hapus-success', 'Data Berhasil Dihapus!');
    }
}
