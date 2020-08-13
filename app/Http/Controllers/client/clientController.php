<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Requests\resetnewpassword;
use App\Notifications\resetPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class clientController extends Controller
{

    public function edit(User $Client)
    {
        return view('client.edit', compact('Client'));
    }
    public function update(Request $request, User $Client)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'user_name' => ['string', 'min:6', 'max:30', 'unique:users,user_name,' . $Client->id],
            'email' => 'string|max:255|' . Rule::unique('users')->ignore($Client->email, 'email'),
            'password' => ['string', 'min:8', 'confirmed'],
        ]);
        if (Hash::check($request->current_password,  Auth::user()->password)) {
            $request_data = $request->only(['user_name','email']);
            $request_data['password'] = Hash::make($request->password);
            $Client->update($request_data);
            session()->flash('msg', 'تم التعديل بنجاح');
            return redirect(route('home'));
        }
        return view('client.edit', compact('Client'))->with('msg_result_check_pass', 'كلمة السر القديمة غير صحيحة');
    }

    public function verify($tokeen)
    {
        User::where('token', $tokeen)->firstOrFail()->update(['token' => null]);
        session()->flash('success', 'The Verified Is Completed Success');
        return redirect()->route('home');
    }
    public  function showResetPasswordForm()
    {
        return view('client.password.resetPassword');
    }

    public  function searshYourAccount(Request $request)
    {
        $token_reset = Str::random(25);
        $user = User::where('email', $request->email)->first();
        if ($user != null) {
            $user->update(['token_reset_password' => $token_reset]);
            $user->notify(new resetPassword($user));
            return redirect()->back()->with('sendEmailToResetPassword', __('site.Resetp'));
        }
        return redirect()->back()->with('sendEmailToResetPassword', __('site.Resetp1'));
    }

    public  function  showsetNewPassword($token_reset_password)
    {
        $user = User::where('token_reset_password', $token_reset_password)->first();
        if ($user != null)
            return view('client.password.showsetNewPassword', compact('user'));
        return view('error.404');
    }

    public  function  setNewPassword(Request $request, $id)
    {   
        $request->validate([
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'password_confirmation' => ['required', 'string', 'min:8'],
        ]);
        
        $user = User::find($id)->update(
            [
                'password' => Hash::make($request->password),
                'token_reset_password' => null
            ],
        );
        return redirect()->route('login');
    }
}
