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
  
        return view('userData.index',compact('userData'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
