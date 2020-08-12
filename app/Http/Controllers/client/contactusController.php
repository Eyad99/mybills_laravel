<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\addNewQuestion;
use App\question;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class contactusController extends Controller
{

    public function index()
    {
        return view('client.contactus');
    }



    public function store(Request $request,User $user_Id)
    {

        $request->validate([
            'text_question' => 'required|string|max:255',
        ]);


        $request_data = $request->all();

        $request_data['status_view'] = '0';
        $request_data['center_type'] = '3';
        $request_data['text_question_en'] = 'null';
        $request_data['user_id'] = Auth::user()->id;
        $question = question::create($request_data);
        $users = User::whereRoleIs('super_admin')->orWhereRoleIs('admin')->get();
        Notification::send($users, new addNewQuestion($question));
        return redirect(route('Contactus.index'));
    }


}
