<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'desc')->get();
        
        return view('pages.backsite.pengguna.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backsite.pengguna.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'unique:users,username',
            'password1' => 'same:password'
        ],
        [
            'same' => 'Konfirmasi password tidak sesuai',
            'username.unique' => 'Username sudah digunakan',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('pengguna.index')->with('success', 'Akun Admin Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.backsite.pengguna.edit', compact('user'));
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
        $username = $request->username;
        $user = User::findOrFail($id);

        if ($user->username == $username) {
            $this->validate($request, [
                'password1' => 'same:password'
            ],
            [
                'same' => 'Konfirmasi password tidak sesuai',
            ]);
        } else {
            $this->validate($request, [
                'username' => 'unique:users,username',
                'password1.unique' => 'same:password'
            ],
            [
                'same' => 'Konfirmasi password tidak sesuai',
                'username.unique' => 'Username sudah digunakan',
            ]);
        }
        
        
        $user->username = $username;
        if($request->password !== null) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('pengguna.index')->with('success', 'Akun Admin Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('pengguna.index')->with('success', 'Akun Admin Berhasil Dihapus');
    }
}
