<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\TownShip;
use App\BloodType;
use App\User;
use Auth;
use Session;
use Validator;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function index()
    { 
         $user=Auth::user();
       if ($user->is_admin()) {
         // code...
          $user = User::all();
            return view ('Admin.adminlist')->withUsers($user);
       }
       return view('auth.adminno');

        
      
        



        return view ('Admin.adminlist')->withUsers($user);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
        $users=User::find($id);

        
        return view('Admin.adminshow')->withUsers($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $admin = User::find($id);
        return view('Admin.adminedit')->withAdmins($admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->admin=1;
        $user->save();

         Session::flash('success','You have changed to Super Admin!');



        return redirect()->route('admin.index',$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $user=Auth::user();
         if($user->is_admin())
         {
             $admin=User::find($id);
          $admin->delete();
          
          return redirect()->route('admin.index');

         }

         return view('auth.adminno');

        
    }
    
}
