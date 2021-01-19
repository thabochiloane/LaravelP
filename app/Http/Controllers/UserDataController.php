<?php

namespace App\Http\Controllers;

use App\UserData;
use Illuminate\Http\Request;

use App\Http\Requests;

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
  
        UserData::create($request->all());
   
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
    }
	
	
	/**
     * Show the form for updating resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('update');
    }
	
	
	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request, $id)
    {
        $userData = UserData::find($userData.$id);
        $userData->name = request('name');
        $userData->surname = request('surname');
        $userData->idNumber = request('idNumber');
        $userData->mobileNumber = request('mobileNumber');
        $userData->email = request('email');
        $userData->dateOfBirth = request('dateOfBirth');
        $userData->language = request('language');
        $userData->interests = request('interests');
		
        $userData->save();
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
        $userData->update($request->all());
  
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }

}
