<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MessageModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function messageView(){
        return view('pages.ajax-view-submit');
    }

        // insert data ajex request here
    //Governing member Page title store data in database
       public function ajaxFormSubmit(Request $request){    
         //Page model object hear........... 
        $pageData = new MessageModel;

        $pageData->name = $request->input('name');
        $pageData->phone = $request->input('phone');
        $pageData->email = $request->input('email');
        // saving user message
        $msgData = $pageData->save(); 
           // checking
        if($msgData){
            return  ['status'=>'success', 'msg'=>'Data posted successfully'];
        }else{
            return  ['status'=>'failed', 'msg'=>'Unable to perfrom the Action'];
        } 
    } 




}
