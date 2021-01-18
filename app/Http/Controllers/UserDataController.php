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
   
        return redirect()->route('user.create')
                        ->with('success','User created successfully.');
    }

}
