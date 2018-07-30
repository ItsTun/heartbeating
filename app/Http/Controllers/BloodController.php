<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\TownShip;
use App\BloodType;
use App\FindBlood;
use DB;
use Carbon\Carbon;
class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $bloodtypes=BloodType::all();
        $townships=TownShip::all();
        return view('blood.findblood')->withBloods($bloodtypes)->withTowns($townships);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
                  
         // $input  = '11/06/1990';
         // $format = 'Y/m/d';

         // $date = Carbon::createFromFormat($format, $input);
         // dd($date);
         $checkDate=Carbon::now()->subMonths(4);
         



        
       if ($request->town==null) {
           # code...
        
                                      // $users = DB::table('donors')->select('donorID','donroName', 'address', 'township_id','bloodytype_id','phNo')
                                     
                                      // ->where('bloodytype_id', '=', $request->type)
                                     
                                      // ->get();



                                      $users=Donor::with('bloodtype','township')
                                        ->where('bloodytype_id', '=', $request->type)
                                        ->get();


                                      

                                      
       }

       else
       {


        // $users = DB::table('donors')->select('donorID','donroName', 'address', 'township_id','bloodytype_id','phNo')
        //                               ->where('date','<=', $checkDate )
        //                               ->where('bloodytype_id', '=', $request->type)
        //                                ->where('township_id','=',$request->town)
        //                               ->get();




                                      $users=Donor::with('bloodtype','township')
                                        ->where('date','<=', $checkDate )
                                         ->where('bloodytype_id', '=', $request->type)
                                        ->where('township_id','=',$request->town)
                                        
                                        ->get();
        

       }

       
        

       
         
             
       
          return view('blood.showblood')->withDonors($users); 





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
