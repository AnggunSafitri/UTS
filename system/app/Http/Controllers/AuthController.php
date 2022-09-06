<?php  

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Penulis;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('/admin')->with('success', 'Selamat Datang');
        } 

        if (auth()->guard('penulis')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('penulis');
        }
        

        return redirect('login')->with('success', 'Password Yang Anda Masukkan Salah');
    }

    public function logout(){
        auth()->logout();
        auth()->guard('penulis')->logout();
        return redirect('login');
    }

    function test(){
		$user= new User;
		$user->nama= 'Super Admin';
		$user->username= 'admin@gmail.com';
		$user->password=bcrypt('admin@gmail.com');
		$user->save();

		return "Berhasil";


	}

}