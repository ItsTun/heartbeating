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

class FDonorController extends Controller
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
        //
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donor.finddonor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // $donor = DB::table('donors')->select('id','donorID','donroName','fatherName','nrcNo','birthday','address', 'township_id','phNo','count','date','bloodytype_id','phRd')
                                     
         //                              ->where('donorID', '=', $request->ID)
                                     
         //                              ->get();
          $donor=Donor::with('bloodtype','township') ->where('donorID', '=', $request->ID)->get();                             








        return view('donor.donorinfo')->withDonors($donor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = User::all();
        return view ('donor.adminlist')->withUsers($user);
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
    }
}
