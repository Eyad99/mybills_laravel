<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;


class contactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('contact');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'text_question' => 'required|string|max:255',
            'email' => 'required|string|email',

        ]);


        $details = [
            'body' => $request->text_question,
            'email' => $request->email,
        ];
        \Mail::to('eyadsharafalmasri@gmail.com')->send(new \App\Mail\send_msg_contact($details));

        session()->flash('success', __('site.msg_send'));
        return redirect(route('ContactusUs.index'));

    }

}
