<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view(
            'user.index',
            [
                'title' => 'Data User'
            ],
            compact('users')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = new User;
        return view('user.create',  [
            'title' => 'Tambah User'
        ], compact(
            'users'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => ['required', 'min:5', 'max:50', 'unique:users'],
        //     'jenis_kelamin' => 'required',
        //     'email' => 'required|email:dns|unique:users',
        //     'level_user' => 'required',
        //     'password' => 'required',
        // ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // User::create($validatedData);

        // return redirect('tbhuser')->with('success', 'Tambah user berhasil, silahkan login');
        $users = new User;
        $users->nama = $request->nama;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->email = $request->email;
        $users->level_user = $request->level_user;
        $users->password = Hash::make($request->password);
        $users->save();

        return redirect()->back()->with('success', 'User Berhasil Disimpan');
        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::find($id);
        return view('user.show', compact(
            'users'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        return view('user.edit', compact(
            'users'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $users = User::find($id);
        $users->nama = $request->nama;
        $users->jenis_kelamin = $request->jenis_kelamin;
        $users->email = $request->email;
        $users->level_user = $request->level_user;
        $users->password = Hash::make($request->password);
        $users->save();

        return redirect()->back()->with('success', 'User Berhasil Diedit');
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = User::find($id);
        $model->delete();
        return redirect()->back()->with('success', 'User Berhasil Dihapus');
        return redirect('index');
    }
}
