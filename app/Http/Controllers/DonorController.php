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

class DonorController extends Controller
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
        $donors=Donor::with('bloodtype','township')->get();
        
       


      


        return view('donor.index',['donors'=>$donors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    


        $town=TownShip::all();
        $blood=BloodType::all();
       
        
        return view('donor.dregister')->withTowns($town)->withBloods($blood);;
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

     

       


        $validator = Validator::make($request->all(), [
            'donorID' => 'required|unique:donors,donorID',
            'donroName' => 'required',
            'fatherName' =>'required',
             'nrcNo' =>'required',
            'birthday'=>'required',
            'age'=>'required',
            'address' => 'required',
            'township_id' => 'required',
            'phNo' => 'required',
            'count' => 'required|integer',
            'date' => 'required',
            'bloodytype_id' => 'required',
            'phRd' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect(route('donor.create'))
                        ->withErrors($validator)
                        ->withInput();
        }


        



        $donors=new Donor;
        $donors->donorID=$request->donorID;
        $donors->donroName=$request->donroName;
        $donors->fatherName=$request->fatherName;
        $donors->nrcNo=$request->nrcNo;
        $donors->birthday=date('Y-m-d', strtotime(str_replace('-', '/', $request['birthday'])));
        $donors->age=$request->age;
        $donors->address=$request->address;
        $donors->township_id=$request->township_id;
        $donors->phNo=$request->phNo;
        $donors->count=$request->count;
        $donors->date=date('Y-m-d', strtotime(str_replace('-', '/', $request['date'])));
        $donors->bloodytype_id=$request->bloodytype_id;
        $donors->phRd=$request->phRd;


        $donors->save();

      




        



        return redirect()->route('donor.show',$donors->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $donors=Donor::find($id);

       

        
        return view('donor.donorshow')->withDonors($donors);
     

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $donors=Donor::find($id);
        $bloods=BloodType::all();
      

        // dd($towns);
        $bl=array();
        foreach ($bloods as $blood) {
            $bl[$blood->id]=$blood->bloodType;
            # code...
        }

        $towns=TownShip::all(); 
        $to=array();
        foreach ($towns as $town) {
            # code...
            $to[$town->id]=$town->townShip;
        }

      
        

        

        return view('donor.donoredit')->withDonors($donors)->withBloods($bl)->withTowns($to);
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
        
        $this->validate($request,array(
            
            'address' => 'required',
            'township_id' => 'required',
            'phNo' => 'required',
            'count' => 'required|integer',
            



         ));

        $donors=Donor::find($id);
        
        
        $donors->address=$request->input('address');
        $donors->township_id=$request->input('township_id');
        $donors->phNo=$request->input('phNo');
        $donors->count=$request->input('count');
       





        $donors->save();

        Session::flash('success','You have edited member info!');



        return redirect()->route('donor.show',$donors->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
         $user=Auth::user();
         if($user->is_admin())
         {
             $donor=Donor::find($id);
          $donor->delete();
          
          return redirect()->route('donor.index');

         }

         return view('auth.adminno');

        
    }
}
