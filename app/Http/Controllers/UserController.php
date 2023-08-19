<?php

namespace App\Http\Controllers;

use App\Models\Phim;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function returnRegister() {
        return view('register');
    }

    public function register(Request $request) {
        $data = $request->only([
            'name',
            'email',
            'password'
        ]);

        if(User::create($data))
       
        echo '<script language="javascript">alert("Dang ky thanh cong !!!");</script>';

        return view('trangchu');
               
    }

    public function returnLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $data = $request->only([
            'email',
            'password'
        ]);

        $user = User::where('email', $data['email'])->first();
        if($data['password'] == $user->password) {
            
            if($user->status == 0 ) {
                echo '<script language="javascript">alert("M chua duoc admin accept !!!");</script>';
                return view('login');
            }
            echo '<script language="javascript">alert("Dang nhap thanh cong !!!");</script>';

            switch($user->role) {
                case 'admin': 
                    return view('Admin.TrangChu');
                case 'staff':
                    return view('Staff.TrangChu');
                default:
                    return view('Customer.TrangChu');
            }
            // return view('trangchu');
        } else {
            echo '<script language="javascript">alert("Dang nhap that bai !!!");</script>';
        }

        
    }

    public function getRela(){
        $data = User::with('phim')->get()->toArray();

        dd($data);
        // dd($data->phim);
        // foreach($data as $phim) {
        //     $phim->phim;
        // }
        
    }
}