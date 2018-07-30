<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    //
    protected $fillable = [
        'donorID', 'donroName','fatherName','nrcNo','age', 'birthday','address','township','phNo','count','date','bloodtype','phRd',
    ];


    public function bloodtype()
    {
    	return $this->belongsTo('App\BloodType','bloodytype_id');
    }

     public function township()
    {
    	return $this->belongsTo('App\Township','township_id');
    }
}
