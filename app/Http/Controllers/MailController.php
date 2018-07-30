<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;



use Mail;

class MailController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    
    public function basic_emial()
    {
    	$data=['name'=>'Its Tun'];
    	Mail::send(['text'=>'mail'],$data,function($message){
    		$message->to('imtunhanmra@gmail.com','Its Tun')->subject('Send Mail From Laravel With Basic Emial');
    		$message->from('heartbeating321@gmail.com','Heart Beating');


    	});

    	echo "Basic Email was sent!";

    }

    public function html_email()
    {   

    	$email=Auth::user()->email;
    	
    	$name=Auth::user()->name;

    	


    	$data=['name'=>'Its Tun'];
    	Mail::send(['text'=>'mail'],$data,function($message){
    		$message->to($email,$name)->subject('Send Mail From Laravel With Basic Emial');
    		$message->from('heartbeating321@gmail.com','Heart Beating');


    	});

    	echo "Basic Email was sent!";
    	
    	
    }
}
