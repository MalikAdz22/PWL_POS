<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\UserModel;


class UserController extends Controller
{
    public function index()
    {
        //$user = UserModel::all();
        //return view('user', ['data' => $user]);

        $data = [
            'level_id' => 2,
            'username' => 'manager_dua',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];

        UserModel::create($data);

        $user =UserModel::all();
        return view('user', ['data' => $user]);

        // tambah data user dengan Eloquent Model
        //$data = [
        //    'nama' => 'Pelanggan Pertama',
        //];
        //UserModel :: where('username', 'customer-1')->update($data); // update data user

        // coba akses model UserModel
        //$user = UserModel::all(); // ambil semua data dari tabel m_user
        //return view('user', ['data' => $user]);
    }
}
