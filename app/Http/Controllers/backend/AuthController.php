<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\ChangePasswordRequest;
use App\Http\Requests\backend\LoginRequest;
use App\Http\Requests\backend\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{

    public function login(){
        return view('backend.auth.login');
    }

    public function loginPost(LoginRequest $request){
//        dd($request->all());
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//        dd(Auth);
//        dd($credentials);

//        dd(Auth::attempt($request->only('email','password')));
        if (Auth::attempt($request->only('email','password'))){
            return redirect()->route('admin.dashboard')->with('success','Đăng nhập thành công');
        }
        else{
            return redirect()->back()->with('error','Đăng nhập không thành công');
        }
    }

    public function logout(){
//        dd('abc');
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function register(){
        return view('backend.auth.register');
    }

    public function registerPost(RegisterRequest $request){
//        dd($request->all());
        $request->merge(['password'=>Hash::make($request->password)]);
//        dd($request->all());
        User::create($request->all());
        return redirect()->route('admin.login')->with('success','Đăng ký thành công');

    }


    public function myProfile(){
        return view('backend.auth.my-profile');
    }

    public function editProfile(){
        return view('backend.auth.edit-profile');
    }

    public function updateProfile(Request $request, $id){

        $user = User::find($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads/users'), $file_name);
            $request->merge(['avatar' => $file_name]);
//            dd($request->all());
        }

        if ($user->update($request->all())) {
            return redirect()->route('admin.myProfile')->with('success', "Sửa thông tin cá nhân thành công");
        } else {
            return 'lỗi';
        }
    }

    public function changePassword(){
//        dd('a');
        return view('backend.auth.change-password');
    }

    public function updatePassword(ChangePasswordRequest $request, $id){

        $user = User::find($id);

        $password = bcrypt($request->password_new);
        $request->merge(['password' => $password]);
//        dd($request->all());
        if ($user->update($request->all())) {
            return redirect()->route('admin.dashboard')->with('success', "Đổi mật khẩu cá nhân thành công");
        } else {
            return 'lỗi';
        }
    }
}
