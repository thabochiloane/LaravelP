<?php

namespace App\Http\Controllers;

use App\UserData;
use Illuminate\Http\Request;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserDataController extends Controller
{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData = UserData::latest()->paginate(5);
  
        return view('index',compact('userData'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {		
		$this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'idNumber' => 'required',
            'mobileNumber' => 'required',
            'email' => 'required',
            'dateOfBirth' => 'required',
            'language' => 'required',
            'interests' => 'required',
        ]);
  
		$input = $request->all();
        $input['interests'] = $request->input('interests');
		
		
		print_r($input);
        UserData::create($input);
		return redirect()->route('user.index')
			->with('success','User created successfully.');
/*
        $data = array(
          'name' => $request->name,
          'email' => $request->email,
		  'subject' => 'Registration email',
        );

        Mail::send('mail', compact('data'), function($message) use ($data){
          $message->from(env('MAIL.USERNAME'));
          $message->to($data['email']);
          $message->subject($data['subject']);
        });
          */
		
		//return redirect()->route('user.index')
			//	->with('success','User created successfully.');

    }
	
	/**
     * Send an Email confirmation after registration.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
	public function sendEmail(User $user)
	{
		return ("email sent");
	}
	
	
	/**
     * Display the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userData = UserData::find($id);
        return view('show',compact('userData', 'id'));
    }
	
	
	/**
     * Show the form for updating resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id , Request $request)
    {
        
		$this->validate($request,[
			'name' => 'required',
			'surname' => 'required',
			'idNumber' => 'required',
			'mobileNumber' => 'required',
			'email' => 'required',
			'dateOfBirth' => 'required',
			'language' => 'required',
			'interests' => 'required',
		]);
		
        
        UserData::create($request->all());
   
        return redirect()->route('user.index')
                        ->with('success','User Updated successfully.');
    }
	
	
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $userData = UserData::find($id);
        $userData->name = request('name');
        $userData->surname = request('surname');
        $userData->idNumber = request('idNumber');
        $userData->mobileNumber = request('mobileNumber');
        $userData->email = request('email');
        $userData->dateOfBirth = request('dateOfBirth');
        $userData->language = request('language');
        $userData->interests = request('interests');
		
		$userData = UserData::find($id);
        return view('update',compact('userData','id'));
    }

	/**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserData::find($id)->delete();
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
